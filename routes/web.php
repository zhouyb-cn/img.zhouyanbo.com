<?php

use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/** Page routes **/ 
Route::group([], function() {
	Route::get('/', 'PageController@home');
	Route::get('/about', 'PageController@about');
	Route::get('/contact', 'PageController@contact');
});

/** need login **/ 
Route::group(['middleware' => 'auth'], function() {
	Route::get('/message', 'PageController@message');
});

Route::post('/file/upload.json', 'FileController@upload');
Route::post('/contact/send.json', 'ContactController@send');

Route::group(['prefix' => 'captcha'], function() {
	Route::get('create', 'CaptchaController@create');
});

// Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/demo', 'DemoController@store');

Route::get('page/demo', function() {
	return view('demo');
});