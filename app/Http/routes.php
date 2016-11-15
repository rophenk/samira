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
  
  Route::get('/', 'HomeController@index');
  Route::auth();
  
  Route::get('/dashboard', 'HomeController@index');
  Route::get('/login2', 'LoginController@login');
  Route::get('/login', 'LoginController@login');
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
  Route::get('/receiver-outgoing/{uuid?}', 'Tnde\OutgoingController@receiver');
  Route::post('/receiver-outgoing', 'Tnde\OutgoingController@storereceiver');

  Route::get('/test-workunit', 'Tnde\WorkUnitsController@test');
  Route::get('/list-workunit', 'Tnde\WorkUnitsController@index');
  Route::get('/select-workunit', 'Tnde\WorkUnitsController@select');

  /* Route For User Management */
  Route::get('/list-users', 'Tnde\UserController@index');
  Route::get('/add-users', 'Tnde\UserController@create');
  Route::post('/add-users', 'Tnde\UserController@store');
  Route::get('/edit-users/{id?}', 'Tnde\UserController@edit');
  Route::post('/edit-users', 'Tnde\UserController@update');

  /* End Of Route For User Management */

  /* Route For TNDE Inbox */
  Route::get('/list-inbox', 'Tnde\InboxController@index');
  Route::get('/list-inbox-incoming', 'Tnde\InboxController@listIncoming');
  Route::get('/list-inbox-view/{uuid?}', 'Tnde\InboxController@viewIncoming');
  Route::get('/list-inbox-action/{id?}/{action}', 'Tnde\InboxController@action');

  /* End Of Route For TNDE Inbox */

  /* Route For TNDE Disposition */
  Route::get('/add-disposition/{incomingId?}', 'Tnde\DispositionController@create');
  Route::post('/add-disposition', 'Tnde\DispositionController@store');
  Route::get('/receiver-disposition/{uuid?}', 'Tnde\DispositionController@index');
  Route::get('/list-disposition/{uuid?}', 'Tnde\DispositionController@index');
  Route::get('/list-disposition-view/{uuid?}', 'Tnde\DispositionController@show');
  Route::get('/list-disposition-print/{uuid?}', 'Tnde\DispositionController@showPrint');
  /* End Of Route For TNDE Disposition */

  /* Route For Simpulpadi Mockup */
  Route::get('/simpul-login', 'Simpul\MockupController@login');
  Route::get('/simpul-dashboard', 'Simpul\MockupController@dashboard');
  Route::post('/simpul-dashboard', 'Simpul\MockupController@dashboard');
  /* End Of Route For Simpulpadi Mockup */

  /* Route For e-HAL Mockup */
  Route::get('/login-ehal', 'LoginController@loginEhal');
  Route::post('/login-ehal', 'LoginController@postLogin');
  Route::get('/speakers-list', 'Ehal\SpeakersController@index');
  Route::get('/speaker-view/{uuid?}', 'Ehal\SpeakersController@show');
  Route::get('/workmeeting-list', 'Ehal\WorkMeetingController@index');
  Route::get('/workmeeting-view/{uuid?}', 'Ehal\WorkMeetingController@show');
  Route::get('/workmeeting-questions', 'Ehal\WorkMeetingController@questions');
  Route::get('/add-workmeeting', 'Ehal\WorkMeetingController@create');
  Route::get('/attachment-workmeeting/{uuid?}', 'Ehal\WorkMeetingController@attachment');
  /* End Of Route For e-HAL Mockup */

  /* Route For Simpulpadi Mockup */
  Route::get('/events-timeline', 'Evicenter\EventsController@index');
  Route::get('/events-list', 'Evicenter\EventsController@eventsList');

  /* End of Route For Simpulpadi Mockup */
  Route::get('/notification', 'PushNotificationController@sendNotificationToDevice');

});

/**
 * Route Untuk Mobile Apps Tandem
 */
Route::group(['prefix' => '/api/v1', 'middleware' => 'auth.api', 'middleware' => 'cors'], function () {

  Route::resource('/list-incoming', 'Tnde\APIIncoming@index');
  Route::get('/inbox/{id?}', 'Tnde\APIIncoming@userInbox');
  Route::get('/view-incoming/{id?}', 'Tnde\APIIncoming@show');
  Route::get('/attachment-incoming/{incomingID?}', 'Tnde\APIIncoming@attachmentIncoming');
  Route::get('/read/{id?}/{user_id?}', 'Tnde\APIIncoming@markRead');
  Route::get('/action/{id?}/{action?}', 'Tnde\APIIncoming@action');
  Route::post('/add-incoming/{user_id?}', 'Tnde\APIIncoming@store');
  Route::post('/attribute-incoming/{uuid?}', 'Tnde\APIIncoming@storeattribute');

});

Route::group(['middleware' => 'cors'], function () {

  Route::post('api/authenticate', 'Tnde\AuthenticationController@authenticate');
  Route::get('api/authenticate', 'Tnde\AuthenticationController@userInbox');

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
