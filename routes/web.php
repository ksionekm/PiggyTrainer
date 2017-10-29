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

Route::get('/home', 'HomeController@index');

/** Training routes */
Route::get('/trainings', 'TrainingController@index')->name('trainings.index');
Route::get('/trainings/create', 'TrainingController@create')->name('training.add.form');


