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
use App\Outgoing;
use App\AttachmentOutgoing;
use App\WorkUnit;
use App\OutgoingActivities;
use DB;

class OutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();

        // Tampilkan semua data Surat Masuk
        $outgoing = Outgoing::all();

        return view('tnde.outgoing-list', [
            'user'     => $user, 
            'outgoing' => $outgoing
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user     = $request->user();
        $satker   = DB::table('workUnits')
                    ->select('id', 'name')
                    ->get();
        $outgoing = Outgoing::where('uuid', $request->uuid)->first();

        return view('tnde.outgoing-add', [
            'user'     => $user,
            'satker'   => $satker,
            'outgoing' => $outgoing 
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
        // Validate the request...
        $explode_input_date = explode("-",$request->input_date);
        $input_date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];
        
        $explode_letter_date = explode("-",$request->letter_date);
        $letter_date = $explode_letter_date[2]."-".$explode_letter_date[1]."-".$explode_letter_date[0];

        $type = $request->type;

        if($type === 'internal') {
            $sender = $request->internal_sender;
        } elseif($type === 'eksternal') {
            $sender = $request->external_sender;
        } else {
            $sender = 'Pengirim Tidak Diketahui';
        }
        
        $outgoing = new Outgoing;
        $outgoing->uuid = Uuid::uuid4();
        $outgoing->input_date = $input_date;
        $outgoing->agenda_number = $request->agenda_number;
        $outgoing->letter_number = $request->letter_number;
        $outgoing->letter_date = $letter_date;
        $outgoing->type = $type;
        $outgoing->sender = $sender;
        $outgoing->receiver = $request->receiver;
        $outgoing->page_count = $request->page_count;
        $outgoing->attachment_count = $request->attachment_count;
        $outgoing->subject = $request->subject;
        $outgoing->description = $request->description;
        $outgoing->user_id = $request->user_id;
        $outgoing->save();

        return redirect("/edit-outgoing/".$outgoing->uuid);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user       = $request->user();
        
        // Tampilka data Outgoing
        $outgoing = Outgoing::where('uuid', $request->uuid)
                                    ->get();

        return view('tnde.outgoing-edit', ['user' => $user, 'outgoing' => $outgoing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $explode_input_date = explode("-",$request->input_date);
        $input_date = $explode_input_date[2]."-".$explode_input_date[1]."-".$explode_input_date[0];
        
        $explode_letter_date = explode("-",$request->letter_date);
        $letter_date = $explode_letter_date[2]."-".$explode_letter_date[1]."-".$explode_letter_date[0];
        
        Outgoing::where('uuid' ,$request->uuid)
        ->update([
            'input_date' => $input_date,
            'agenda_number' => $request->agenda_number,
            'letter_number' => $request->letter_number,
            'letter_date' => $letter_date,
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'attachment_count' => $request->attachment_count,
            'subject' => $request->subject,
            'description' => $request->description,
            'user_id' => $request->user_id
            ]);
        return redirect("/edit-outgoing/".$request->uuid);
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

    public function attribute(Request $request)
    {
        $user       = $request->user();

         $outgoing = Outgoing::where('uuid', $request->uuid)
                                    ->get();
        return view('tnde.outgoing-attribute-add', ['user' => $user, 'outgoing' => $outgoing]);

    }

    public function storeattribute (Request $request)
    {
        Outgoing::where('uuid' ,$request->uuid)
        ->update([
            'letter_type' => $request->letter_type,
            'letter_classification' => $request->letter_classification,
            'letter_character' => $request->letter_character,
            'letter_expedition' => $request->letter_expedition,
            'letter_storage' => $request->letter_storage
            ]);
        return redirect("/attribute-outgoing/".$request->uuid);

    }

    public function attachment(Request $request)
    {
        $user       = $request->user();

        $outgoing = Outgoing::where('uuid', $request->uuid)
                                    ->get();

        $attachment = AttachmentOutgoing::where('outgoing_uuid', $request->uuid)
                                    ->get();

        return view('tnde.outgoing-attachment', ['user' => $user, 'outgoing' => $outgoing, 'attachment' => $attachment]);
    }

    public function attachmentlist(Request $request)
    {
        $user       = $request->user();

        $outgoing = Outgoing::where('uuid', $request->uuid)
                                    ->get();

        $attachment = AttachmentOutgoing::where('outgoing_uuid', $request->uuid)
                                    ->get();

        return view('tnde.outgoing-attachment-list', ['user' => $user, 'outgoing' => $outgoing, 'attachment' => $attachment]);
    }

    public function uploadattachment(Request $request)
    {
        $user       = $request->user();

        $outgoing = Outgoing::where('uuid', $request->uuid)
                                    ->first();
        
        $files = $request->file('file');

        if(!empty($files)) {
            foreach ($files as $file) {
                Storage::disk('tnde')->put($request->uuid."/".$file->getClientOriginalName(), file_get_contents($file));
                $attachment = new AttachmentOutgoing;
                $attachment->uuid = Uuid::uuid4();
                $attachment->outgoing_id = $outgoing->id;
                $attachment->outgoing_uuid = $outgoing->uuid;
                $attachment->name = $file->getClientOriginalName();
                $attachment->size = $file->getSize();
                $attachment->type = $file->getMimeType();
;
                $attachment->save();
            }
        }

        return Response::json(array('success' => true));

    }

    public function showattachment(Request $request)
    {
        $user       = $request->user();
        $attachment = AttachmentOutgoing::where('uuid', $request->uuid)
                                    ->first();
        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        return view('tnde.outgoing-attachment-show', ['user' => $user, 'attachment' => $attachment, 'file' => $storagePath]);                          
    }

    public function attachmentdelete(Request $request)
    {
        $attachmentOutgoing = AttachmentOutgoing::where('uuid', $request->uuid)
                                    ->first();

        Storage::disk('tnde')->delete($attachmentOutgoing->outgoing_uuid.'/'.$attachmentOutgoing->name);

        $deleteAttachmet = AttachmentOutgoing::where('uuid', $request->uuid)->delete();

        return redirect("/attachment-outgoing/".$attachmentOutgoing->outgoing_uuid);
    }

    public function receiver(Request $request)
    {
        $user       = $request->user();
        // Tampilka data Outgoing
        $outgoing = Outgoing::where('uuid', $request->uuid)
                                    ->first();

        $outgoing_id = $outgoing->id;

        $receiver = DB::table('outgoingActivities')
                    ->leftJoin('users', 'users.id', '=', 'outgoingActivities.userID')
                    ->leftJoin('workUnits', 'workUnits.id', '=', 'users.workUnitsID')
                    ->select('outgoingActivities.*', 'users.name AS name', 'users.avatar AS avatar', 'workUnits.name AS satker')
                    ->where('outgoingID', '=', $outgoing_id)
                    ->get();
        //return $receiver;

        $satker = DB::table('workUnits')
                  ->select('id', 'name')
                  ->get();

        return view('tnde.outgoing-receiver', ['user' => $user, 'outgoing' => $outgoing, 'receiver' => $receiver, 'satker' => $satker]);
    }

    public function storereceiver(Request $request)
    {
        $user       = $request->user();

        $receiver = $request->receiver;
        $tembusan = $request->tembusan;

        if(!empty($request->receiver)) {
            
            foreach ($receiver as $rec) {
            
            $users = DB::table('users')
                     ->select('id')
                     ->where('workUnitsID', '=', $rec)
                     ->get();

                if(!empty($users)) {

                    foreach ($users as $usr) {
                      $time = date("Y-m-d H:i:s");

                        DB::table('outgoingActivities')->insert([
                            [
                                'uuid'           => Uuid::uuid4(),
                                'outgoingID'     => $request->outgoing_id, 
                                'userID'         => $usr->id,
                                'receiverStatus' => 'receiver',
                                'read'           => 0,
                                'dateSend'       => $time,
                                'action'         => NULL
                            ]
                        ]);

                    }

                }     
                
            }
        }

        if(!empty($request->tembusan)) {

            foreach ($tembusan as $tbs) {
            
            $users = DB::table('users')
                     ->select('id')
                     ->where('workUnitsID', '=', $tbs)
                     ->get();

                if(!empty($users)) {

                    foreach ($users as $usr) {

                      $time = date("Y-m-d H:i:s");

                        DB::table('outgoingActivities')->insert([
                            [
                                'uuid'           => Uuid::uuid4(),
                                'outgoingID'     => $request->outgoing_id, 
                                'userID'         => $usr->id,
                                'receiverStatus' => 'tembusan',
                                'read'           => 0,
                                'dateSend'       => $time,
                                'action'         => NULL
                            ]
                        ]);
                        
                    }
                }
                
            }
        }
        
        return redirect("/receiver-outgoing/".$request->outgoing_uuid);

    }
}
