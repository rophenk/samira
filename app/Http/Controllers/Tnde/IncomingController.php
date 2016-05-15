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
use App\AttachmentIncoming;
use DB;

class IncomingController extends Controller
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
        $incoming = Incoming::all();

        return view('tnde.incoming-list', ['user' => $user, 'incoming' => $incoming]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();
        return view('tnde.incoming-add', ['user' => $user]);
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
        
        $incoming = new Incoming;
        $incoming->uuid = Uuid::uuid4();
        $incoming->input_date = $input_date;
        $incoming->agenda_number = $request->agenda_number;
        $incoming->letter_number = $request->letter_number;
        $incoming->letter_date = $letter_date;
        $incoming->sender = $request->sender;
        $incoming->receiver = $request->receiver;
        $incoming->attachment_count = $request->attachment_count;
        $incoming->subject = $request->subject;
        $incoming->description = $request->description;
        $incoming->user_id = $request->user_id;
        $incoming->save();

        return redirect("/edit-incoming/".$incoming->uuid);
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
        
        // Tampilka data Incoming
        $incoming = Incoming::where('uuid', $request->uuid)
                                    ->get();

        return view('tnde.incoming-edit', ['user' => $user, 'incoming' => $incoming]);
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
        
        Incoming::where('uuid' ,$request->uuid)
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
        return redirect("/edit-incoming/".$request->uuid);
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

         $incoming = Incoming::where('uuid', $request->uuid)
                                    ->get();
        return view('tnde.incoming-attribute-add', ['user' => $user, 'incoming' => $incoming]);

    }

    public function storeattribute (Request $request)
    {
        Incoming::where('uuid' ,$request->uuid)
        ->update([
            'letter_type' => $request->letter_type,
            'letter_classification' => $request->letter_classification,
            'letter_character' => $request->letter_character,
            'letter_expedition' => $request->letter_expedition,
            'letter_storage' => $request->letter_storage
            ]);
        return redirect("/attribute-incoming/".$request->uuid);

    }

    public function attachment(Request $request)
    {
        $user       = $request->user();

        $incoming = Incoming::where('uuid', $request->uuid)
                                    ->get();

        $attachment = AttachmentIncoming::where('incoming_uuid', $request->uuid)
                                    ->get();

        return view('tnde.incoming-attachment', ['user' => $user, 'incoming' => $incoming, 'attachment' => $attachment]);
    }

    public function attachmentlist(Request $request)
    {
        $user       = $request->user();

        $incoming = Incoming::where('uuid', $request->uuid)
                                    ->get();

        $attachment = AttachmentIncoming::where('incoming_uuid', $request->uuid)
                                    ->get();

        return view('tnde.incoming-attachment', ['user' => $user, 'incoming' => $incoming, 'attachment' => $attachment]);
    }

    public function uploadattachment(Request $request)
    {
        $user       = $request->user();

        $incoming = Incoming::where('uuid', $request->uuid)
                                    ->first();
        
        $files = $request->file('file');

        if(!empty($files)) {
            foreach ($files as $file) {
                Storage::disk('tnde')->put($request->uuid."/".$file->getClientOriginalName(), file_get_contents($file));
                $attachment = new AttachmentIncoming;
                $attachment->uuid = Uuid::uuid4();
                $attachment->incoming_id = $incoming->id;
                $attachment->incoming_uuid = $incoming->uuid;
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
        $attachment = AttachmentIncoming::where('uuid', $request->uuid)
                                    ->first();
        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        return view('tnde.incoming-attachment-show', ['user' => $user, 'attachment' => $attachment, 'file' => $storagePath]);                          
    }

    public function attachmentdelete(Request $request)
    {
        $attachmentIncoming = AttachmentIncoming::where('uuid', $request->uuid)
                                    ->first();

        Storage::disk('tnde')->delete($attachmentIncoming->outgoing_uuid.'/'.$attachmentIncoming->name);

        $deleteAttachmet = AttachmentIncoming::where('uuid', $request->uuid)->delete();

        return redirect("/attachment-outgoing/".$attachmentIncoming->outgoing_uuid);
    }
}
