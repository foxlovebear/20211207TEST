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


Route::resource('account_info', 'App\Http\Controllers\UserCRUDListController');
Route::get('/', 'App\Http\Controllers\UserCRUDListController@index');
Route::get('/create', 'App\Http\Controllers\UserCRUDListController@create');
Route::post('/store', 'App\Http\Controllers\UserCRUDListController@store');
Route::get('/edit_page/{id}', 'App\Http\Controllers\UserCRUDListController@edit_page');
Route::patch('/edit/{id}', 'App\Http\Controllers\UserCRUDListController@update');

// Route::middleware(['auth:sanctum','verified'])...等
