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



Route::get('/', 'App\Http\Controllers\BukuController@index');
Route::get('/buku/add', 'App\Http\Controllers\BukuController@add');
Route::post('/buku/tambah', 'App\Http\Controllers\BukuController@tambah');
Route::get('/buku/edit/{id}', 'App\Http\Controllers\BukuController@edit');
Route::post('/buku/update', 'App\Http\Controllers\BukuController@update');
Route::get('/buku/del/{id}', 'App\Http\Controllers\BukuController@del');
