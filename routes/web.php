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

Route::get('/', 'HomeController@film')->name('home');
Route::get('/serie', 'HomeController@serie')->name('serie');
Route::get('/anime', 'HomeController@film')->name('anime');
Route::get('/get_premium', 'HomeController@film')->name('get_premium');

