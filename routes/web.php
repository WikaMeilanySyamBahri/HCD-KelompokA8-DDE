<?php

use App\Http\Controllers\Result;
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


Route::get('/result/{id?}', 'App\Http\Controllers\result@index')->name('result');
Route::get('/', 'App\Http\Controllers\history@index')->name('history');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
