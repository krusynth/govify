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

Route::get('/docs', 'DocumentController@index');
Route::get('/docs/new', 'DocumentController@new');
Route::post('/docs/new', 'DocumentController@create');
