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

    public function userInbox(Request $request)
    {
        $user_id = $request->id();

        $userInbox = DB::table('incomingActivities')
                    ->leftJoin('incoming', 'incoming.id', '=', 'incomingActivities.incomingID')
                    ->leftJoin('workUnits', 'workUnits.id', '=', 'incomingActivities.workUnitsID')
                    ->select('incomingActivities.*', 'incoming.sender', 'incoming.perihal', 'workUnits.name AS satker')
                    ->where('userID', '=', $user_id)
                    ->get();
        return $userInbox;
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
