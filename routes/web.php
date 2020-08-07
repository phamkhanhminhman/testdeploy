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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'testController@test');
Route::get('test1', 'testController@test1');
Route::get('session', 'testController@session');
Route::get('google', 'PhotoController@google');
Route::get('callback', 'PhotoController@google');

Route::get('photo',  'PhotoController@getPhoto');
