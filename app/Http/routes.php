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
    return view('front.pages.home');
});

Route::get('/about', function () {
    return view('front.pages.about');
});

Route::get('/services', function () {
    return view('front.pages.service');
});

Route::get('/portfolio', function () {
    return view('front.pages.portfolio');
});

Route::get('/connect', function () {
    return view('front.pages.connect');
});

Route::get('/legal', function () {
    return view('front.pages.legal');
});

Route::get('/chain', function () {
    return view('front.pages.chain');
});

Route::auth();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/home/{id}' , 'HomeController@index');
    Route::get('home/edit/{id}', 'HomeController@edit');
    Route::post('home/update', 'HomeController@update');

    Route::get('/about/board/{id}', 'AboutController@index');
    Route::get('/about/edit/{id}' , 'AboutController@edit');
    Route::post('about/board/update', 'AboutController@update');

    Route::get('/about/directors' , 'DirectorController@index');
    Route::get('/about/directors/create' , 'DirectorController@create');
    Route::post('/about/directors/store' , 'DirectorController@store');
    Route::get('/about/director/edit/{id}' , 'DirectorController@edit');
    Route::get('/about/director/delete/{id}' , 'DirectorController@delete');
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
    Route::get('/service/icon/delete/{id}' , 'ServiceController@icon_delete');
    Route::get('/service/icon' , 'ServiceController@icon_index');

    Route::get('/portfolio/edit' , 'PortfolioController@edit');
    // Route::get('/portfolio' , 'PortfolioController@index');
    Route::post('/portfolio/update' , 'PortfolioController@update');

    Route::get('/portfolio/item/edit/{id}' , 'PortfolioController@item_edit');
    Route::get('/portfolio/item/delete/{id}' , 'PortfolioController@item_delete');
    Route::post('/portfolio/item/update' , 'PortfolioController@item_update');
    Route::get('/portfolio/item/create' , 'PortfolioController@item_create');
    Route::post('/portfolio/item/store' , 'PortfolioController@item_store');
    Route::get('/portfolio/item' , 'PortfolioController@item_index');

    // Route::get('/connect' , 'ConnectController@index');
    Route::get('/connect/edit' , 'ConnectController@edit');
    Route::post('/connect/update' , 'ConnectController@update');

    Route::get('/profile/edit/{id}', 'ProfileController@edit');
    Route::post('/profile/update', 'ProfileController@update');
    Route::post('/profile/update_password', 'ProfileController@update_password');

	Route::get('/profile', function () {
	    return 'profile bos';
	});
});

Route::get('test', function(){
    $model = new \App\Directors();
    $msg = ['a'=>'ono'];
    $valid = $model->create($msg);
    dd($valid);
});