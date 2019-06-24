<?php

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

Route::get('/','TodosController@index');
Route::resource('todo','TodosController');
Route::POST('/create/submit', 'TodosController@store');
Route::get('/edit', 'TodosController@edit');
Route::POST('todo', 'TodosController@update');
Route::get('todo', 'TodosController@destroy'); 
Route::resource('/api/todo','TodosController');