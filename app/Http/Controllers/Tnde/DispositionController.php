<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\IncomingActivities;
use App\AttachmentIncoming;
use App\Disposition;
use App\DispositionTrait;
use App\DispositionInstruction;
use DB;

class DispositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        $incoming_activities_id = '';
        
        // cari disposisi berdasarkan user yang login
        $disposition = Disposition::distinct()
                        ->select('incoming_activities_id')
                        ->where('receiver_user_id', '=', $user->id)
                        ->groupBy('incoming_activities_id')
                        ->get();

        $incomingDisposition = DB::select('
                                select 
                                    `disposition`.`id` AS `disposition_id`, 
                                    `disposition`.`uuid`, 
                                    `disposition`.`read`,
                                    `disposition`.`disposition_instruction`,
                                    `disposition`.`note`, 
                                    `disposition`.`dateSend`, 
                                    `incoming_activities_id`,
                                    `incomingActivities`.`uuid` AS `incoming_activities_uuid`, 
                                    `incoming`.`uuid` AS `incoming_uuid`, 
                                    `incoming`.`letter_date`,  
                                    `incoming`.`sender`,  
                                    `incoming`.`subject` 
                                from disposition 
                                left join incomingActivities on (incomingActivities.id = incoming_activities_id)
                                left join incoming on (incoming.id = incomingID)

                                where receiver_user_id = '. $user->id 
                                
                                );
                               
        //var_dump($incomingActivities);die();
        return view('tnde.inbox-disposition', [
            'user'          => $user, 
            'incoming'      => $incomingDisposition, 
            'disposition'   => $disposition
            ]);
        //return $incomingDisposition;
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
