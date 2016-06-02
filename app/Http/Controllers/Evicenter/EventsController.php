<?php

namespace App\Http\Controllers\Evicenter;

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
use App\Events;
use DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();

        // Tampilkan semua data Events
        /*$events = Events::all();*/
        $events = DB::table('events')
                    ->leftJoin('events_type', 'events_type.id', '=', 'events.typeID')
                    ->leftJoin('users', 'users.id', '=', 'events.userID')
                    ->select('events.*', DB::raw('DATE_FORMAT(events.start_date, "%d %M %Y %H:%i:%s") as start_date_format'), DB::raw('DATE_FORMAT(events.end_date, "%d %M %Y %H:%i:%s") as end_date_format'), 'users.name AS user_name', 'users.avatar AS avatar', 'events_type.type', 'events_type.color', 'events_type.icon')
                    ->orderBy('events.start_date', 'desc')
                    ->get();

        return view('tnde.events-timeline', ['user' => $user, 'events' => $events]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventsList(Request $request)
    {
        $user       = $request->user();

        // Tampilkan semua data Events
        $events = DB::table('events')
                    ->leftJoin('events_type', 'events_type.id', '=', 'events.typeID')
                    ->leftJoin('users', 'users.id', '=', 'events.userID')
                    ->select('events.*', DB::raw('DATE_FORMAT(events.start_date, "%d %M %Y %H:%i:%s") as start_date_format'), DB::raw('DATE_FORMAT(events.end_date, "%d %M %Y %H:%i:%s") as end_date_format'), 'users.name AS user_name', 'users.avatar AS avatar', 'events_type.type', 'events_type.color', 'events_type.icon')
                    ->orderBy('events.start_date', 'desc')
                    ->get();
       
        return view('tnde.events-list', ['user' => $user, 'events' => $events]);
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
