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

Route::get('/', 'MeiboController@index');
Route::post('/', 'MeiboController@post');

Route::get('/edit/{id}','MeiboController@showEditPage');
Route::post('/edit/{id}','MeiboController@saveEditPage');

Route::get('/delete/{id}','MeiboController@showDeletePage');
Route::post('/delete/{id}','MeiboController@Delete');

Route::get('postSuccessed','MeiboController@postSuccessed');