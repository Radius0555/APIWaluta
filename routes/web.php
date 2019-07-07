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

Route::get('apiwaluta/', 'CashController@index')->name('apiwaluta.index');
Route::post('apiwaluta/pokaz', 'CashController@pokaz')->name('apiwaluta.pokaz');
