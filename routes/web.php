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

Route::get('/', function () {
    return view('welcome');
});


//class
Route::get('/class','ClassesController@read')->name('class.index');
Route::post('/class/add','ClassesController@store')->name('class.store');
Route::get('/class/update/{id}','ClassesController@put')->name('class.update');
Route::post('/class/edit/{id}','ClassesController@update')->name('class.edit');
Route::get('/class/delete/{id}','ClassesController@delete')->name('class.delete');

