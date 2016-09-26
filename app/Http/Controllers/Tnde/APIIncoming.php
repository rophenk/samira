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
    public function index()
    {
        // Tampilkan semua data Surat Masuk
        $incoming = Incoming::all();

        return $incoming;
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

        return response()->json(['success' => 'inbox-request-processed', 'inbox' => $userInbox, 'unread' => $unread]);
    }

    public function attachmentIncoming($incomingID)
    {
        $attachmentIncoming = DB::table('attachmentIncoming')
                              ->select('attachmentIncoming.*')
                              ->where('incoming_id', '=', $incomingID)
                              ->get();
        return response()->json(['success' => 'attachment-request-processed', 'attachmentIncoming' => $attachmentIncoming]);
    }

    public function markRead($id,$user_id)
    {
        IncomingActivities::where('id' ,$id)
        ->update([
            'read' => 1
            ]);
        $myFuncs = new \App\Helpers\MyFunctions;
        $unread = ($myFuncs->getUnreadInbox($user_id));

        return response()->json(['success' => 'inbox-read', 'unread' => $unread]);
    }

    public function action($id,$action)
    {
        IncomingActivities::where('id' ,$id)
        ->update([
            'action' => $action
            ]);
        return response()->json(['success' => 'inbox-action', 'action' => $action]);
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
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }

        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers:        
                {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

            exit(0);
        }

        //http://stackoverflow.com/questions/15485354/angular-http-post-to-php-and-undefined
        $postdata = file_get_contents("php://input");
        if (isset($postdata)) {
            $request = json_decode($postdata);
            $input_date = $request->input_date;

            if ($input_date != "") {
                echo "Server returns: " . $input_date;
            }
            else {
                echo "Empty input_date parameter!";
            }
        }
        else {
            echo "Not called properly with input_date parameter!";
        }
        // Validate the request...
        /*$explode_input_date = explode("-",$request->input_date);
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

        $incoming = new Incoming;
        $incoming->uuid = Uuid::uuid4();
        $incoming->input_date = $input_date;
        $incoming->agenda_number = $request->agenda_number;
        $incoming->letter_number = $request->letter_number;
        $incoming->letter_date = $letter_date;
        $incoming->type = $type;
        $incoming->sender = $sender;
        $incoming->receiver = $request->receiver;
        $incoming->page_count = $request->page_count;
        $incoming->attachment_count = $request->attachment_count;
        $incoming->subject = $request->subject;
        $incoming->description = $request->description;
        $incoming->user_id = $request->user_id;
        $incoming->save();*/

        return response()->json([
            'success' => 'incoming added'
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
        $attachment = AttachmentIncoming::where('incoming_id', $request->id)->get();
        
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
