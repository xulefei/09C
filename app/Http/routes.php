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
    Route::get('/', 'index\IndexController@getIndex');
    Route::get('login_index', 'home\LoginController@login_index');
    Route::post('login_pro', 'home\LoginController@login_pro');
    Route::get('index_success', 'home\HomeController@index_success');