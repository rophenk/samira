<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ApiAccess
{

    /*protected $auth;*/
    protected $guard = 'api';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard='')
    {
        $auth = auth()->guard('api');
 
        if ($auth->check()) {
            return $next($request);
        };
     
        abort(403, "You're not authorized to access this public REST API.");
        
        /*$auth = auth()->guard('api');
    
        if ($auth->check()) {
            return $next($request);
        } else {

            abort(403, "You're not authorized to access this public REST API.");
        }*/
     
        /*if (Auth::guard($guard)->check()) {



            if ($request->ajax() || $request->wantsJson()) {

                //return response('Unauthorized.', 401);

                return $next($request);
            
            } else {


                
            }


        
        } else {

            return $next($request);
        }*/


        /*if(Auth::guard('api')->user()) {
            return $next($request);
        } else {
            return response('Unauthorized.', 401);
        }*/


        

        //return Auth::onceBasic() ?: $next($request);



        //var_dump(Auth::guard($guard)->check());

    }

        
}
