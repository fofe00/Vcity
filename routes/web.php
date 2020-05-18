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

Route::get('/','UtilisateurController@login')->name('Ulogin');
Route::get('/','UtilisateurController@login')->name('login');
Route::post('/','UtilisateurController@tLogin')->name('tLogin');
Route::get('/register','UtilisateurController@register')->name('Uregister');
Route::post('/register','UtilisateurController@tRegister')->name('tRegister');
Route::get('/logout','UtilisateurController@logout')->name('tlogout');
Route::get('/home','CompteController@home')->name('home');
Route::get('/cop','CompteController@home')->name('compte');
Route::get('/cop','CompteController@home')->name('water');
Route::get('/cop','CompteController@home')->name('ligth');
