<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use DB;

class DispositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $userID                     = $request->userID;
        $receiver                   = $request->receiver;
        $disposition_trait_id       = $request->disposition_trait_id;
        $disposition_instruction_id = json_encode($request->disposition_instruction, JSON_FORCE_OBJECT);
        $note                       = $request->note;

        if(!empty($request->receiver)) {
            
            foreach ($receiver as $rec) {
            
            $users = DB::table('users')
                     ->select('id')
                     ->where('workUnitsID', '=', $rec)
                     ->get();

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
                                'disposition_instruction' => $disposition_instruction_id,
                                'note'                    => $note,
                                'read'                    => 0,
                                'dateSend'                => $time,
                                'report'                  => NULL
                            ]
                        ]);

                    }

                }     
                
            }

            return redirect("/receiver-disposition/".$request->incoming_uuid);
        }
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
