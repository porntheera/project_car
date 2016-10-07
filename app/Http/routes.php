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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('/queue', 'CCController@queue');
    Route::get('/index','CCController@index');
    Route::get('/home', 'CCController@home');
    Route::get('/service', 'CCController@service');
    Route::get('/profile', 'CCController@profile');
    Route::get('/test', 'CCController@test');
    Route::get('/book_queue_wash', 'CCController@book_queue_wash');
    Route::get('/book_queue_deposit', 'CCController@book_queue_deposit');
    Route::get('/list_service', 'CCController@list_service');
    Route::get('/checkcar', 'CCController@checkcar');
    Route::get('/contact', 'CCController@contact');
    Route::get('/customer', 'CCController@customer');
    Route::get('/editpassword', 'CCController@editpassword');
    Route::get('/editprofile', 'CCController@editprofile');
    Route::get('/resume', 'CCController@resume');
    Route::get('/promotion', 'CCController@promotion');
    Route::get('/checkcartotal', 'CCController@checkcartotal');
    Route::get('/apprize', 'CCController@apprize');
    // 
    Route::post('/bookqueue/insert', 'CCController@book_queue_wash_insert');
});

