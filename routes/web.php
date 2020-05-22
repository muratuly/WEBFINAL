<?php

use Illuminate\Support\Facades\Route;


Route::get('/','UserController@index')->name('home');

Route::get('all','UserController@data')->name('all');

Route::post('/movies','UserController@store')->name('store');

Route::get('/movies','UserController@create')->name('movies');

Route::get('genres','UserController@genres')->name('genres');

Route::get('/edit/{id}','UserController@edit')->name('edit');

Route::post('/update/{id}','UserController@update')->name('update');

Route::delete('/delete/{id}','UserController@delete')->name('delete');

Auth::routes();

Route::get('home', 'HomeController@index')->name('welcome');
