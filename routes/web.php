<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Admin */
Route::get('/', function () {
    return redirect('login');
});
/*
Route::get('/login', function () {
    return view('login');
});
*/

Route::get('/home', function () {
  return redirect('redirect');
});



//Redirect Applications


//Login Controller's


Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::get('/redirect', 'HomeController@redirectURL')->name('redirect');
Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@authenticate']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

//Admin Controller's
Route::group(['prefix'=>'admin','middleware'=>['auth','AccessAdmin']],function(){

Route::get('/fechas', 'AdminController@alerts');

  Route::get('/', 'AdminController@homeAdmin');
  Route::get('/create-certificate', 'AdminController@certificate');
  Route::post('/create-certificate', 'AdminController@create_certificate');
  Route::get('/alerts', 'AdminController@alerts');
  Route::get('/active-inactive', 'AdminController@getuser');
  Route::get('/active-inactive/status/{id}', 'AdminController@editstatus');
  Route::get('/admin-settings', 'AdminController@getuseradmin');
  Route::get('/table', function () {return view('admin.table');});
  Route::get('/table/{id}', 'AdminController@loadResult');
  Route::get('/edit-certificate/{id}', 'AdminController@getcertificate');
  Route::post('/edit-certificate/{id}', 'AdminController@editcertificate');
  Route::get('/create-admin', function () {return view('admin.add-admin');});
  Route::post('/create-admin', 'AdminController@addAdmin');
  Route::get('/user-profile/{id}', 'AdminController@userprofile');
  Route::post('/user-profile/{id}', 'AdminController@edituserprofile');

});

Route::get('/cancelled',function(){return view('user.cancelled');});
  Route::get('/expired',function(){return view('user.expired');});

Route::group(['prefix'=>'user','middleware'=>['auth','AccessUser']],function(){
  Route::get('/',function(){ return view('user.home');
  });
  Route::post('/', 'UserController@sendCertificate');
  /* User */
  Route::get('/history', 'UserController@gethistory');
  Route::get('/client-list', 'UserController@getclient');
  Route::get('/download-certificate/{option}', 'UserController@loadResult');
  Route::get('/send-via',function(){return view('user.send-via');});
  Route::get('/account', 'UserController@account');
  Route::get('/get-password',function(){return view('user.get-password');});
  Route::post('/get-password', 'UserController@getpassword');
  Route::get('/login',function(){return view('user.login');});
  Route::get('/reset-password',function(){return view('user.reset-password');});
  Route::post('/reset-password', 'UserController@resetpassword');


  Route::get('/send-via',function(){return view('user.send-via');});
  Route::get('/support',function(){return view('user.support');});

  Route::get('/certificate',function(){return view('user.send_certificate');});
  Route::post('/certificate', 'UserController@sendCertificate');


});
