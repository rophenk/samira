<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use DB;
use Auth;

class AuthenticationController extends Controller
{
    public function authenticate(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) { 
          $user = Auth::user();

          return response()->json(['success' => 'auth-authorized', 'token' => $user->api_token, 'user' => $user], 200);
        
        } else {

          return response()->json(['error' => 'invalid_credentials'], 401);

        }

    }

    public function index()
    {
      
      $auth = auth()->guard('api');
      var_dump($auth);die();
        if ($auth->check()) {
            /*return $next($request);*/
            return response()->json(['success' => 'auth-authorized', 'user' => $user], 200);
        };
     
        abort(403, "You're not authorized to access this public REST API.");
      
      
    }
}
