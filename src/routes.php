<?php
/**
 * Created by PhpStorm.
 * User: n0m4dz
 * Date: 11/19/15
 * Time: 12:27 PM
 */

Route::group([
    'namespace' => 'Solarcms\Authentication\Controllers',
    'prefix' =>'solar/auth',
    'as' => 'Solar.Auth::'], function() {

    Route::get('login', 'AuthenticationController@login');

    // Authentication routes...
    Route::post('login', ['as' => 'login.post', 'uses' => 'AuthenticationController@postLogin']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'AuthenticationController@getLogout']);

    // Registration routes...
    Route::get('register', 'AuthenticationController@getRegister');
    Route::post('register', 'AuthenticationController@postRegister');
});