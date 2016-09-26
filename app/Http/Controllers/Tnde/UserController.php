<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use DB;
use App\Users;
use App\WorkUnit;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();

        // Tampilkan semua Pengguna
        $users = DB::table('users')
                 ->leftJoin('workUnits', 'users.workUnitsID', '=', 'workUnits.id')
                 ->leftJoin('roles', 'users.role_id', '=', 'roles.id')
                 ->select('users.*', 'roles.name AS role_name', 'workUnits.name AS satker')
                 ->get();
        //return $users;
        return view('tnde.users-list', ['user' => $user, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();

        //Populasi dropdown WorkUnit
        $workunit_options = WorkUnit::all();

        //Populasi dropdown Role
        $role_options = Role::all();

        // Tampilkan Form User
        return view('tnde.users-add', [
            'satker'  => $workunit_options, 
            'roles'   => $role_options, 
            'user'    => $user
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
        // Simpan data ke database
        $user = new Users;
        $user->name        = $request->name;
        $user->email       = $request->email;
        $user->phone       = $request->phone;
        $user->address     = $request->address;
        $user->password    = bcrypt($request->password);
        $user->workUnitsID = $request->workUnitsID;
        $user->role_id     = $request->role_id;
        $user->api_token   = str_random(60);
        $user->modules     = 'tnde';
        $user->save();
        return redirect("/list-users");
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

        //Populasi dropdown WorkUnit
        $workunit_options = WorkUnit::all();

        //Populasi dropdown Role
        $role_options = Role::all();

        // Tampilka data User Database
        $userdb = Users::where('id', $request->id)
                  ->first();

        // Tampilkan Form User
        return view('tnde.users-edit', [
            'satker'  => $workunit_options, 
            'roles'   => $role_options,
            'userdb'  => $userdb,
            'user'    => $user
            ]);
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
        // Check if password change
        if(strlen($request->newpassword) > 0){
            // Validate the request...
            //var_dump("Password Change"); die();
            Users::where('id',$request->id)
            ->update([
                'name'        => $request->name, 
                'email'       => $request->email,
                'password'    => bcrypt($request->newpassword),
                'role_id'     => $request->role_id,
                'phone'       => $request->phone,
                'address'     => $request->address,
                'workUnitsID' => $request->workUnitsID
                ]);

        } else {

            //var_dump("Password Not Change"); die();
            // Validate the request...
            Users::where('id' ,$request->id)
            ->update([
                'name' => $request->name, 
                'email' => $request->email,
                'role_id' => $request->role_id,
                'phone'       => $request->phone,
                'address'     => $request->address,
                'workUnitsID' => $request->workUnitsID 
                ]);
        }
        
        return redirect("/list-users");
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
