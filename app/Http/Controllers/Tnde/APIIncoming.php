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
                    ->select('incomingActivities.*', DB::raw("DATE_FORMAT(dateSend, '%d-%m-%Y %H:%i:%s') AS dateSend"), 'incoming.sender', 'incoming.subject', 'workUnits.name AS satker')
                    ->where('userID', '=', $user_id)
                    ->simplePaginate(10);

        $myFuncs = new \App\Helpers\MyFunctions;
        $unread = ($myFuncs->getUnreadInbox($user_id));
        
        return response()->json(['success' => 'auth-authorized', 'inbox' => $userInbox, 'unread' => $unread]);
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
        //
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
