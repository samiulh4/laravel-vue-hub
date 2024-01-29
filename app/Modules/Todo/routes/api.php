<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('api/todo/get-all', 'TodoApiController@getAllTodo');
