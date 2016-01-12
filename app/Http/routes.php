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
Route::get('/', 'EntriesController@index');
Route::get('/language/{language}', function ($language) {
    Session::put('language', $language);
    return redirect('/auth/login');
});
Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth'], function() {
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');
});
Route::get('/home', function () {
    if (\Auth::user()) {
        return view('user.home');
    } else {
        return redirect('/');
    }
});
Route::resource('entries', 'EntriesController');
Route::resource('users', 'UsersController');
