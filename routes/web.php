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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list' , 'TaskController@index')->name('tasks.index');

Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/tasks', 'TaskController@store')->name('tasks.store');
Route::get('/delete/{id}', 'TaskController@delete')->name('tasks.delete');
Route::post('/delete/{id}', 'TaskController@destroy')->name('tasks.destroy');