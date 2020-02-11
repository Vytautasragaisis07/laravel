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
Route::get('/skelbimas/{ad}', 'HomeController@showSkelbimas');
Route::get('/visiskelbimai', 'HomeController@showSkelbimai');

Route::get('/kategorija', 'CategoryController@AddKategorija');
Route::post('/store-category', 'CategoryController@StoreKategorija'); //Uzklausa
Route::get('/valdyti-kategorija', 'CategoryController@ValdytiKategorija');
Route::get('/trinti-kategorija/{category}', 'CategoryController@TrintiKategorija');

Route::get('/prideti', 'AdController@AddSkelbima');
Route::post('/store-ad', 'AdController@StoreAd'); //Uzklausa
Route::get('/valdyti-skelbima', 'AdController@ValdytiSkelbima');
Route::get('/trinti-skelbima/{ad}', 'AdController@TrintiSkelbima');
Route::get('/redaguotiSkelbima/ad/{ad}', 'AdController@RedaguotiSkelbima');
Route::get('/redaguoti_skelbima/{ad}', 'AdController@Redaguoti_skelbima'); //Uzklausa

