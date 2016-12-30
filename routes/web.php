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

Route::group([], function() {
	Route::get('/', 'PageController@home');
	Route::get('/about', 'PageController@about');
	Route::get('/contact', 'PageController@contact');
});

Route::post('/file/upload.json', 'FileController@upload');
Route::post('/contact/send.json', 'ContactController@send');

Route::group(['prefix' => 'captcha'], function() {
	Route::get('create', 'CaptchaController@create');
});
