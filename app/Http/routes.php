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
    if(Auth::guest())
      return redirect()->route('auth.login');
    else
      return redirect()->route('dashboard');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('auth.login');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('auth.login');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('auth.logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister')->name('auth.register');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('auth.register');

Route::group(['middleware' => ['auth']], function(){
  Route::get('dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('shares', 'SharesController@index')->name('shares');
});

Route::group(['middleware' => ['auth', 'is.admin']], function(){
  Route::get('shares/manage', 'SharesController@manage')->name('shares.manage');
  Route::post('shares/manage', 'SharesController@save')->name('shares.manage');
});
