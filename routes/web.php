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

Route::get('/', 'Alt3Controller@index');
Route::post('/register', 'RegisterController@index');

Route::get('/alt-1', 'Alt1Controller@index');
Route::get('/alt-2', 'Alt2Controller@index');
Route::get('/alt-3', 'Alt3Controller@index');

Route::get('/docs', 'DocsController@index');
