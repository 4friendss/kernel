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

Route::get('/','IndexController@index');
Route::get('/index','IndexController@home');
Route::get('/addCategory','IndexController@addCategory');
Route::get('/addProduct','ProductController@addProduct');
Route::post('addNewCategory','ProductController@addNewCategory');
