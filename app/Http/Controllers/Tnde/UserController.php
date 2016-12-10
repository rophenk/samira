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
        return view('tnde.users-list', [
            'user' => $user, 
            'users' => $users
        ]);
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
        $url = config('app.url');

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

        // copy default logo sebagai avatar
        Storage::disk('tnde')->copy('logo.png','avatar/'.$user->id.'/logo.png');

        // update avatar dengan default
        Users::where('id',$user->id)
            ->update([
                'avatar' => $url.'/tnde/avatar/'.$user->id.'/logo.png'
                ]);
        
        return redirect("/list-users");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAvatar(Request $request)
    {
        $user       = $request->user();

        // Tampilkan data User Database
        $userdb = Users::where('id', $request->id)
                  ->first();

        // Tampilkan Avatar User
        return view('tnde.users-avatar', [
            'userdb'  => $userdb,
            'user'    => $user
        ]);
    }

    public function uploadAvatar(Request $request)
    {
        $user       = $request->user();

        $userdb = Users::where('id', $request->id)
                  ->first();

        if($userdb->avatar != null) {

            $old_avatar = $userdb->avatar;
            Storage::disk('tnde')->delete('avatar/'.$request->id.'/'.basename($old_avatar));

        }
        $files = $request->file('file');

        $url = config('app.url');
        if(!empty($files)) {
            foreach ($files as $file) {
                Storage::disk('tnde')->put("avatar/".$request->id."/".$file->getClientOriginalName(), file_get_contents($file));
                Users::where('id',$request->id)
                ->update([
                    'avatar' => $url."/tnde/avatar/".$request->id."/".$file->getClientOriginalName()
                    ]);
            }
        }

        return Response::json(array('success' => true));

    }

    public function listAvatar(Request $request)
    {
        $user       = $request->user();

        // Tampilkan data User Database
        $userdb = Users::where('id', $request->id)
                  ->first();

        // Tampilkan Avatar User
        return view('tnde.users-avatar-list', [
            'userdb'  => $userdb,
            'user'    => $user
        ]);
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
