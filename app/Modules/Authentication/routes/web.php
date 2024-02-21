<?php

use Illuminate\Support\Facades\Route;

Route::get('authentication/check', 'AuthenticationController@authCheck');

Route::group(['middleware' => 'auth'], function () {
    Route::post('authentication/web/update-auth-user', 'AuthenticationController@authWebUpdateUser');
    Route::get('authentication/sign-out', 'AuthenticationController@signOut');
});
