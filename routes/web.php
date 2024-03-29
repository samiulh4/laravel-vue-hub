<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
// Vue Js Route
Route::get('/', [App\Http\Controllers\VueController::class, 'index'])->name('vue.index');
Route::get('/vue/{any?}', [App\Http\Controllers\VueController::class, 'index'])->where('any', '(.*)');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Redis
Route::get('/redis', [App\Http\Controllers\RedisController::class, 'testRedis']);
