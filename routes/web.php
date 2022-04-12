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

Route::get('/', 'FrontController@show');
Route::get('/contact','FrontController@index');
Route::get('/experience','FrontController@exp');
Route::get('/contact/create','FrontController@save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/TambahData', 'HomeController@addData');
Route::get('/SaveData', 'HomeController@saveData');

Route::get('/TambahSkill', 'HomeController@addSkill');
Route::get('/SaveSkill', 'HomeController@saveSkill');