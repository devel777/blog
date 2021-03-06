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
Route::get('/blog', 'BlogController@index');
Route::post('/blog', 'BlogController@index');
Route::get('/users', 'UsersController@index');
//Route::get('/blog/edit', 'EditController@index');
Route::post('/edit', 'EditController@addText');
