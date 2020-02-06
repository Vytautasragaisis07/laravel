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

Route::get('/', 'HomeController@index');
Route::get('/skelbimai', 'HomeController@showSkelbimai');
Route::get('/apie', 'HomeController@showApie');
Route::get('/kontaktai', 'HomeController@showKontaktai');
Route::get('/prisijungti', 'HomeController@showPrisijungti');
Route::get('/registruotis', 'HomeController@showRegistruotis');
Route::get('/prideti', 'HomeController@showPrideti');

