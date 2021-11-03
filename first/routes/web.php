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

Route::get('/', 'WorkersController@allWorkers')->name('main');
Route::get('/add', function () { return view('add'); })->name('add-form');
Route::post('/add', 'WorkersController@submit');
Route::get('/edit/{id}', 'WorkersController@edit')->name('edit');
Route::get('/delete/{id}', 'WorkersController@delete')->name('delete');