<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', [\App\Http\Controllers\LogsController::class, 'sum']);

Route::get('/sub/{num1}/{num2}', [\App\Http\Controllers\LogsController::class, 'sub']);

Route::get('/div/{num1}/{num2}', [\App\Http\Controllers\LogsController::class, 'div']);

Route::get('/mult/{num1}/{num2}', [\App\Http\Controllers\LogsController::class, 'mult']);

