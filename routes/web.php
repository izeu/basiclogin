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

Route::get('/home', 'HomeController@index')->name('home');

//insert data
Route::get('/insert','StudInsertController@insertform')->name('insert');
Route::post('/create','StudInsertController@insert');

//update data
Route::get('/list-name','StudUpdateController@index')->name('list-name');
Route::get('/edit/{id}','StudUpdateController@show');
Route::post('/edit/{id}','StudUpdateController@edit');

//delete data
Route::get('/delete-records','StudDeleteController@index')->name('delete-records');
Route::get('/delete/{id}','StudDeleteController@destroy');