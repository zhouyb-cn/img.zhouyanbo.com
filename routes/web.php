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

Route::group([], function () {
    Route::get('/', 'PageController@home');
    Route::get('/about', 'PageController@about');
    Route::get('/contact', 'PageController@contact');
});

Route::post('/file/upload.json', 'FileController@upload');
Route::post('/contact/send.json', 'ContactController@send');

Route::group(['prefix' => 'captcha'], function () {
    Route::get('create', 'CaptchaController@create');
});
