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

Route::auth();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/home/{id}' , 'HomeController@index');
    Route::get('home/edit/{id}', 'HomeController@edit');
    Route::post('home/update', 'HomeController@update');

    Route::get('/about/board/{id}', 'AboutController@index');
    Route::get('/about/board/edit/{id}' , 'AboutController@edit');
    Route::post('about/board/update', 'AboutController@update');

    Route::get('/about/director/{id}' , 'BoardController@index');
    Route::get('/about/directors/create' , 'DirectorController@create');
    Route::post('/about/directors/store' , 'DirectorController@store');
    Route::get('/about/director/edit/{id}' , 'DirectorController@edit');
    Route::post('/about/director/update' , 'DirectorController@update');

    Route::get('/about/legal/edit' , 'LegalController@edit');
    Route::post('/about/legal/update' , 'LegalController@update');
    Route::get('/about/legal/{id}' , 'LegalController@index');

    Route::get('/about/chain/edit' , 'ChainController@edit');
    Route::post('/about/chain/update' , 'ChainController@update');
    Route::get('/about/chain/{id}' , 'ChainController@index');

    Route::get('/service' , 'ServiceController@index');
    Route::get('/service/edit' , 'ServiceController@edit');
    Route::post('/service/update' , 'ServiceController@update');

    Route::get('/service/icon/create' , 'ServiceController@create');
    Route::get('/service/icon/edit/{id}' , 'ServiceController@icon_edit');
    Route::post('/service/icon/update' , 'ServiceController@icon_update');
    Route::post('/service/icon/store' , 'ServiceController@store');
    Route::get('/service/icon/{id}' , 'ServiceController@icon_index');

	Route::get('/profile', function () {
	    return 'profile bos';
	});
});