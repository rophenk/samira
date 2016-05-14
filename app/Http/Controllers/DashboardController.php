<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
  public function dashboard(Request $request)
  {
    $user       = $request->user();
    return view('tnde.dashboard', ['user' => $user]);
  }
}
