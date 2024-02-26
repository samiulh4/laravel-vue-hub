<?php

use Illuminate\Support\Facades\Route;

Route::get('authentication/check', 'AuthenticationController@authCheck');
Route::post('authentication/web/sign-in', 'AuthenticationController@webSignInSubmit');

Route::group(['middleware' => 'auth'], function () {
    Route::post('authentication/web/update-auth-user', 'AuthenticationController@authWebUpdateUser');
    Route::get('authentication/sign-out', 'AuthenticationController@signOut');
});
