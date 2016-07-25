<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth' , 'CustomAuthController@index');
Route::post('/login' , 'CustomAuthController@login');
Route::get('/logout', 'CustomAuthController@logout');
Route::get('/auth/check', 'CustomAuthController@check');

Route::get('user/{id}/{yono}', function ($ids , $nama) {
    return 'User '.$ids;
});