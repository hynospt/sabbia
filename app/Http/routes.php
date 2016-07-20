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

Route::get('/login', 'LoginController@index');
Route::post('/auth/login', 'Auth\AuthController@login');

Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // Route named "admin::dashboard"
        return view('admin.pages.dashboard.index');

    }]);
});

Route::group(['middleware' => 'auth'], function () {
	## Group middleware => auth call 
    Route::get('dashboard/index', function () {
        // Uses Auth Middleware
        echo "test";
    });
});