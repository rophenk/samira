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
                    ->select('id', 'uuid', DB::raw("DATE_FORMAT(input_date, '%d-%m-%Y') AS input_date"), DB::raw("DATE_FORMAT(letter_date, '%d-%m-%Y') AS letter_date"), 'incoming.sender', 'incoming.receiver', 'incoming.type', 'incoming.agenda_number', 'incoming.letter_number', 'incoming.subject', 'incoming.description', 'incoming.page_count', 'incoming.attachment_count', 'incoming.letter_type', 'incoming.letter_classification', 'incoming.letter_character', 'incoming.letter_expedition', 'incoming.letter_storage')
                    ->where('user_id', '=', $user_id)
                    ->orderBy('input_date', 'desc')
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
                    ->select('incomingActivities.*', DB::raw("DATE_FORMAT(dateSend, '%d-%m-%Y %H:%i:%s') AS dateSend"), 'incoming.sender', 'incoming.receiver', 'incoming.subject', 'incoming.description', 'incoming.attachment_count', 'workUnits.name AS satker')
                    ->where('userID', '=', $user_id)
                    ->orderBy('dateSend', 'desc')
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$input_date = $_POST['input_date'];
        return response()->json([
            'success' => 'incoming added',
            'uuid'    => $input_date
            ]);*/
        // Validate the request...
        
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
            'success' => 'incoming attribute added',
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
        
        return response()->json(['success' => 'auth-authorized', 'incoming' => $incoming, 'attachment' => $attachment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
