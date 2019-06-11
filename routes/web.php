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

Route::get('/', 'GuestPagesController@index')->name('index');
Route::get('/ranking', 'GuestPagesController@ranking')->name('ranking');
Route::get('/pilotentry', 'GuestPagesController@pilotEntry')->name('pilotEntry');
Route::get('/evententry', 'GuestPagesController@eventEntry')->name('eventEntry');
Route::get('/events', 'GuestPagesController@eventDisplay')->name('eventDisplay');
Route::get('/classentry', 'GuestPagesController@classEntry')->name('classEntry');
