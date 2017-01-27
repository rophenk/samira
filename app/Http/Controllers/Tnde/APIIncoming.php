<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Validator;
use Response;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\AuthTraits\RedirectsUsers;
use App\Incoming;
use App\IncomingActivities;
use App\AttachmentIncoming;
use App\Disposition;
use App\DispositionDegree;
use App\DispositionInstruction;
use App\DispositionTrait;
use App\WorkUnit;
use App\Template;
use DB;

class APIIncoming extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        
        // Tampilkan semua data Surat Masuk
        $incoming = DB::table('incoming')
                    ->select('id', 'uuid', 'input_date AS format_date', DB::raw("DATE_FORMAT(input_date, '%d-%m-%Y') AS input_date"), DB::raw("DATE_FORMAT(letter_date, '%d-%m-%Y') AS letter_date"), 'incoming.sender', 'incoming.receiver', 'incoming.type', 'incoming.agenda_number', 'incoming.letter_number', 'incoming.subject', 'incoming.description', 'incoming.page_count', 'incoming.attachment_count', 'incoming.letter_type', 'incoming.letter_classification', 'incoming.letter_character', 'incoming.letter_expedition', 'incoming.letter_storage')
                    /*->where('user_id', '=', $user_id)*/
                    ->orderBy('format_date', 'desc')
                    ->simplePaginate(10);

        return response()->json([
            'success' => 'incoming-list-request-ok', 
            'incoming'   => $incoming
            ]);
    }

    public function userInbox($id)
    {
        $user_id = $id;

        $userInbox = DB::table('incomingActivities')
                    ->leftJoin('incoming', 'incoming.id', '=', 'incomingActivities.incomingID')
                    ->leftJoin('users', 'users.id', '=', 'incomingActivities.userID')
                    ->leftJoin('workUnits', 'workUnits.id', '=', 'users.workUnitsID')
                    ->select('incomingActivities.*', 'dateSend AS date', DB::raw("DATE_FORMAT(dateSend, '%d-%m-%Y %H:%i:%s') AS dateSend"), 'incoming.sender', 'incoming.receiver', 'incoming.subject', 'incoming.description', 'incoming.attachment_count', 'workUnits.name AS satker')
                    ->where('userID', '=', $user_id)
                    ->orderBy('date', 'desc')
                    ->simplePaginate(10);

        $myFuncs = new \App\Helpers\MyFunctions;
        $unread = ($myFuncs->getUnreadInbox($user_id));

        return response()->json([
            'success' => 'inbox-request-processed', 
            'inbox'   => $userInbox, 
            'unread'  => $unread
            ]);
    }

    public function attachmentIncoming($incomingID)
    {
        $attachmentIncoming = DB::table('attachmentIncoming')
                              ->select('attachmentIncoming.*')
                              ->where('incoming_id', '=', $incomingID)
                              ->get();
        return response()->json([
            'success'            => 'attachment-request-processed', 
            'attachmentIncoming' => $attachmentIncoming
            ]);
    }

    public function markRead($id,$user_id)
    {
        IncomingActivities::where('id' ,$id)
        ->update([
            'read' => 1
            ]);
        $myFuncs = new \App\Helpers\MyFunctions;
        $unread = ($myFuncs->getUnreadInbox($user_id));

        return response()->json([
            'success' => 'inbox-read', 
            'unread'  => $unread
            ]);
    }

    public function action($id,$action)
    {
        $exec = IncomingActivities::where('id', '=', $id)
                          ->update([
                              'action' => $action
                              ]);

        return response()->json([
            'success' => 'inbox-action', 
            'action'  => $action,
            'exec'    => $exec
            ]);
    }

    public function uploadattachment(Request $request)
    {

        $incoming = Incoming::where('uuid', $request->uuid)
                                    ->first();

        $file = $request->file;
        
        $url = config('app.url');
        Storage::disk('tnde')->put($request->uuid."/".$file->getClientOriginalName(), file_get_contents($file));
                $attachment = new AttachmentIncoming;
                $attachment->uuid = Uuid::uuid4();
                $attachment->incoming_id = $incoming->id;
                $attachment->incoming_uuid = $incoming->uuid;
                $attachment->name = $file->getClientOriginalName();
                $attachment->size = $file->getSize();
                $attachment->type = $file->getMimeType();
                $attachment->url = $url."/tnde/".$request->uuid."/".$file->getClientOriginalName();
                $attachment->save();

        return response()->json([
            'success'            => 'attachment-request-processed', 
            'attachmentIncoming' => $file->getClientOriginalName()
            ]);

    }

    /**
     * get Disposition Degree     *
     * @return \Illuminate\Http\Response
     */
    public function getDispositionDegree()
    {
        $degree = DispositionDegree::all();
        return response()->json([
            'success' => 'disposition-degree-received', 
            'data'    => $degree
        ]);

    }

    /**
     * get Disposition Instruction    *
     * @return \Illuminate\Http\Response
     */
    public function getDispositionInstruction()
    {
        $instruction = DispositionInstruction::all();
        return response()->json([
            'success' => 'disposition-instruction-received', 
            'data'    => $instruction
        ]);

    }

    /**
     * get Disposition Trait    *
     * @return \Illuminate\Http\Response
     */
    public function getDispositionTrait()
    {
        $trait = DispositionTrait::all();
        return response()->json([
            'success' => 'disposition-trait-received', 
            'data'    => $trait
        ]);

    }

    /**
     * get Work Unit   *
     * @return \Illuminate\Http\Response
     */
    public function getWorkUnit()
    {
        $workUnit = WorkUnit::all();
        return response()->json([
            'success' => 'disposition-workUnit-received', 
            'data'    => $workUnit
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $type = $request->type;

        if($type === 'internal') {
            $sender = $request->internal_sender;
        } elseif($type === 'eksternal') {
            $sender = $request->external_sender;
        } else {
            $sender = 'Pengirim Tidak Diketahui';
        }

        $incoming = new Incoming;
        $incoming->uuid = Uuid::uuid4();
        $incoming->input_date = $request->input_date;
        $incoming->agenda_number = $request->agenda_number;
        $incoming->letter_number = $request->letter_number;
        $incoming->letter_date = $request->letter_date;
        $incoming->type = $type;
        $incoming->sender = $sender;
        $incoming->receiver = $request->receiver;
        $incoming->page_count = $request->page_count;
        $incoming->attachment_count = $request->attachment_count;
        $incoming->subject = $request->subject;
        $incoming->description = $request->description;
        $incoming->user_id = $request->user_id;
        $incoming->save();

        return response()->json([
            'success' => 'incoming added',
            'perihal' => $request->subject,
            'uuid'    => $incoming->uuid 
            ]);
    }

    public function storeattribute (Request $request)
    {
        Incoming::where('uuid' ,$request->uuid)
        ->update([
            'letter_type'           => $request->letter_type,
            'letter_classification' => $request->letter_classification,
            'letter_character'      => $request->letter_character,
            'letter_expedition'     => $request->letter_expedition,
            'letter_storage'        => $request->letter_storage
            ]);

        return response()->json([
            'success' => 'incoming-attribute-added',
            'uuid'    => $request->uuid 
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // Tampilkan semua data Surat Masuk
        $incoming = Incoming::find($request->id)->first();
        $attachment = AttachmentIncoming::where('incoming_id', $request->id)
                      ->get();
        
        return response()->json([
            'success' => 'auth-authorized', 
            'incoming' => $incoming, 
            'attachment' => $attachment
            ]);
    }

    /**
     * Store Disposition
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDisposition(Request $request)
    {
        $userID                     = $request->userID;
        $receiver                   = $request->receiver;
        $disposition_trait_id       = $request->disposition_trait_id;
        $disposition_degree_id      = $request->disposition_degree_id;
        $disposition_instruction_id = $request->disposition_instruction_id;
        $note                       = $request->note;

        if(!empty($request->receiver)) {
            
            
            $users = DB::table('users')
                     ->select('id')
                     ->where('workUnitsID', '=', $receiver)
                     ->get();

            $instruction = DB::table('disposition_instruction')
                            ->select('id','instruction')
                            ->where('id', '=', $disposition_instruction_id)
                            ->first();

            $instructArr = array(
                $instruction->id => $instruction->instruction
                );
            //print_r($instructArr);die();
                if(!empty($users)) {

                    foreach ($users as $usr) {
                      $time = date("Y-m-d H:i:s");

                        DB::table('disposition')->insert([
                            [
                                'uuid'                    => Uuid::uuid4(),
                                'incoming_activities_id'  => $request->incoming_id, 
                                'userID'                  => $userID,
                                'receiver_user_id'        => $usr->id,
                                'disposition_trait_id'    => $disposition_trait_id,
                                'disposition_degree_id'   => $disposition_degree_id,
                                'disposition_instruction' => json_encode($instructArr, JSON_FORCE_OBJECT),
                                'note'                    => $note,
                                'read'                    => 0,
                                'dateSend'                => $time,
                                'report'                  => NULL
                            ]
                        ]);

                    }

                }     
                

            return response()->json([
                'success' => 'add-disposition-success'
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function receiver(Request $request)
    {
        // Tampilka data Incoming
        $incoming = Incoming::where('uuid', $request->uuid)
                                    ->first();

        $incoming_id = $incoming->id;

        $receiver = DB::table('incomingActivities')
                    ->leftJoin('users', 'users.id', '=', 'incomingActivities.userID')
                    ->leftJoin('workUnits', 'workUnits.id', '=', 'users.workUnitsID')
                    ->select('incomingActivities.*', 'users.name AS name', 'users.avatar AS avatar', 'workUnits.name AS satker')
                    ->where('incomingID', '=', $incoming_id)
                    ->get();

        return response()->json([
            'success' => 'incoming-receiver-list',
            'receiver'    => $receiver 
            ]);
    }

    public function storereceiver(Request $request)
    {
        $rec = '';
        $user       = $request->user();
        if($request->receiverStatus == "receiver") {
            $receiverStatus = "receiver";
        } else if($request->receiverStatus == "tembusan") {
            $receiverStatus = "tembusan";
        }
        $receiver = $request->receiver;
        $tembusan = $request->tembusan;

        if(!empty($request->receiver)) {
            
            //foreach ($receiver as $rec) {
            
            $users = DB::table('users')
                     ->select('id')
                     ->where('workUnitsID', '=', $receiver)
                     ->get();
                     
                if(!empty($users)) {

                    foreach ($users as $usr) {
                      $time = date("Y-m-d H:i:s");

                        DB::table('incomingActivities')->insert([
                            [
                                'uuid'           => Uuid::uuid4(),
                                'incomingID'     => $request->incoming_id, 
                                'userID'         => $usr->id,
                                'receiverStatus' => $receiverStatus,
                                'read'           => 0,
                                'dateSend'       => $time,
                                'action'         => NULL
                            ]
                        ]);

                    }

                }     
                
            //}
        }

        return response()->json([
            'success' => 'success_add_receiver'
            ]);

    }

    public function getTemplate()
    {
        $template = Template::all();

        return response()->json([
            'success'  => 'template-list',
            'template' => $template 
            ]);
    }
}
