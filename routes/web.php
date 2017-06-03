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
    return view('welcome');
});
/*
Route::get('/login', function () {
    return view('login');
});
*/
Route::get('/admin/index', function () {
    return view('admin.index');
});

/* Route::get('/admin/create-certificate', function () {return view('admin.create-certificate');}); */
Route::get('/admin/create-certificate', 'AdminController@certificate');
Route::post('/admin/create-certificate', 'AdminController@create_certificate');
Route::post('/admin/prueba', 'AdminController@create_certificate');

Route::get('/admin/alerts', function () {
    return view('admin.alerts');
});

Route::get('/admin/active-inactive', function () {
    return view('admin.active-inactive');
});

Route::get('/admin/admin-settings', function () {
    return view('admin.admin-settings');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});


/* User */
Route::get('/user/account',function(){return view('user.account');});

Route::get('/user/client-list',function(){return view('user.client-list');});

Route::get('/user/get-password',function(){return view('user.get-password');});

Route::get('/user/history',function(){return view('user.history');});

Route::get('/user/login',function(){return view('user.login');});

Route::get('/user/reset-password',function(){return view('user.reset-password');});

Route::get('/user/certificate',function(){return view('user.send_certificate');});

Route::get('/user/send-via',function(){return view('user.send-via');});

Route::get('/user/support',function(){return view('user.support');});
