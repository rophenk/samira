<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
    $user       = $request->user();
		return view("tnde.dashboard", ['user'=>$user]);
	}

	public function dashboard()
	{
		return view("sibankum.admin.index");
	}

	

}
