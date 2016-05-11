<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');
Route::get('home', 'DashboardController@dashboard');

/**
 * Route Untuk menampilkan Dashboard / Home
 */
/*Route::get('home', [
  'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
  'uses' => 'DashboardController@dashboard',
  'roles' => ['administrator', 'manager', 'web'] // Only an administrator, or a manager can access this route
]);*/
