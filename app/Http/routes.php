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

/*Route::get('/', function () {
    return view('welcome');
});*/

$options = [
    'prefix' => 'api/v1', 
    'namespace' => 'Api', 
    'middleware' => 'auth.api',
];

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
  
  Route::get('/', 'LoginController@login');
  Route::auth();
  
  Route::get('/dashboard', 'HomeController@index');
  Route::get('/login2', 'LoginController@login');
  Route::post('/login2', 'LoginController@postLogin');
  Route::get('/logout2', 'LoginController@logout');

  Route::get('/list-incoming', 'Tnde\IncomingController@index');
  Route::get('/add-incoming', 'Tnde\IncomingController@create');
  Route::get('/edit-incoming/{uuid?}', 'Tnde\IncomingController@edit');
  Route::post('/add-incoming', 'Tnde\IncomingController@store');
  Route::post('/edit-incoming', 'Tnde\IncomingController@update');
  Route::get('/attribute-incoming/{uuid?}', 'Tnde\IncomingController@attribute');
  Route::post('/attribute-incoming/{uuid?}', 'Tnde\IncomingController@storeattribute');
  Route::get('/attachment-incoming/{uuid?}', 'Tnde\IncomingController@attachment');
  Route::get('/attachment-incoming-list/{uuid?}', 'Tnde\IncomingController@attachmentlist');
  Route::post('/attachment-incoming/{uuid?}', 'Tnde\IncomingController@uploadattachment');
  Route::get('/attachment-show-incoming/{uuid?}', 'Tnde\IncomingController@showattachment');
  Route::get('/attachment-incoming-delete/{uuid?}', 'Tnde\IncomingController@attachmentdelete');
  Route::get('/receiver-incoming/{uuid?}', 'Tnde\IncomingController@receiver');
  Route::post('/receiver-incoming', 'Tnde\IncomingController@storereceiver');

  Route::get('/list-outgoing', 'Tnde\OutgoingController@index');
  Route::get('/add-outgoing', 'Tnde\OutgoingController@create');
  Route::get('/edit-outgoing/{uuid?}', 'Tnde\OutgoingController@edit');
  Route::post('/add-outgoing', 'Tnde\OutgoingController@store');
  Route::post('/edit-outgoing', 'Tnde\OutgoingController@update');
  Route::get('/attribute-outgoing/{uuid?}', 'Tnde\OutgoingController@attribute');
  Route::post('/attribute-outgoing/{uuid?}', 'Tnde\OutgoingController@storeattribute');
  Route::get('/attachment-outgoing/{uuid?}', 'Tnde\OutgoingController@attachment');
  Route::get('/attachment-outgoing-list/{uuid?}', 'Tnde\OutgoingController@attachmentlist');
  Route::post('/attachment-outgoing/{uuid?}', 'Tnde\OutgoingController@uploadattachment');
  Route::get('/attachment-show-outgoing/{uuid?}', 'Tnde\OutgoingController@showattachment');
  Route::get('/attachment-outgoing-delete/{uuid?}', 'Tnde\OutgoingController@attachmentdelete');

  Route::get('/test-workunit', 'Tnde\WorkUnitsController@test');
  Route::get('/list-workunit', 'Tnde\WorkUnitsController@index');
  Route::get('/select-workunit', 'Tnde\WorkUnitsController@select');

  Route::get('/list-users', 'Tnde\UserController@index');

  /* Route For Simpulpadi Mockup */
  Route::get('/simpul-login', 'Simpul\MockupController@login');
  Route::get('/simpul-dashboard', 'Simpul\MockupController@dashboard');
  Route::post('/simpul-dashboard', 'Simpul\MockupController@dashboard');

});

Route::group(['prefix' => '/api/v1', 'middleware' => 'auth.api'], function () {

  Route::resource('/list-incoming', 'Tnde\APIIncoming@index');

});

Route::group(['middleware' => 'cors'], function () {

  Route::post('api/authenticate', 'Tnde\AuthenticationController@authenticate');
  Route::get('api/authenticate', 'Tnde\AuthenticationController@index');

});

/*Route::get('home', 'DashboardController@dashboard');*/
/**
 * Route Untuk menampilkan Surat masuk
 */

/*Route::group(['middleware' => 'admin'], function () {
    Route::get('add-incoming', function () {
        return view('dashboard');
    });
});

Route::get('add-incoming', [
  'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
  'uses' => 'Tnde\IncomingController@create',
  'roles' => ['administrator', 'manager', 'web'] // Only an administrator, or a manager can access this route
]); */
/**
 * Route Untuk menampilkan Dashboard / Home
 */
/*Route::get('home', [
  'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
  'uses' => 'DashboardController@dashboard',
  'roles' => ['administrator', 'manager', 'web'] // Only an administrator, or a manager can access this route
]);

Route::auth();

Route::get('/home', 'HomeController@index');*/
