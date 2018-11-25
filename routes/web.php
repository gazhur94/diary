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

Auth::routes();

Route::get('/home', 'DiaryController@index')->name('home');

Route::post('/schedule/edit', 'ScheduleController@edit')->name('schedule.edit');
Route::post('/schedule/get', 'ScheduleController@get')->name('schedule.get');

Route::post('/homework/edit', 'HomeworkController@edit')->name('homework.edit');

