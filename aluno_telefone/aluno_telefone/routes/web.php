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

Route::get('/', 'AlunoController@index');
Route::post('/', 'AlunoController@add');
Route::get('/listar', 'AlunoController@list');
Route::get('/listar/{id}', 'AlunoController@show');

