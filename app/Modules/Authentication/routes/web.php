<?php

use Illuminate\Support\Facades\Route;

Route::get('auth/check', 'AuthenticationController@authCheck');

Route::group(['middleware' => 'auth'], function () {
    Route::post('auth/web/update-auth-user', 'AuthenticationController@authWebUpdateUser');
});
