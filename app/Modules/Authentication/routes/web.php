<?php

use Illuminate\Support\Facades\Route;


Route::get('auth/check', 'AuthenticationController@authCheck');