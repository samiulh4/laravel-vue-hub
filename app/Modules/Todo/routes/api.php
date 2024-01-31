<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('api/todo/get-all', 'TodoApiController@getAllTodo');
Route::post('api/todo/add', 'TodoApiController@addTodo');
Route::delete('api/todo/delete/{id}', 'TodoApiController@deleteTodo');
