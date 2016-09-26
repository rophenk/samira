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
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }

        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers:        
                {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

            exit(0);
        }


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

        if ($auth->check()) {
            /*return $next($request);*/
            return response()->json(['success' => 'auth-authorized', 'user' => $user], 200);
        };
     
        abort(403, "You're not authorized to access this public REST API.");
      
      
    }
}
