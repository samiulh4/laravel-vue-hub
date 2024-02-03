<?php

use Illuminate\Support\Facades\Route;

Route::get('todo/get-all', 'TodoController@getAllTodo');
Route::middleware('auth')->group(function () {
    Route::post('todo/add', 'TodoController@addTodo'); 
    Route::put('todo/update/{id}', 'TodoController@updateTodo');
    Route::delete('todo/delete/{id}', 'TodoController@deleteTodo');
});





