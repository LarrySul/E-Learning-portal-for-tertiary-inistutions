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

Route::get('/home', function () {
    return view('admin/home');
});

Auth::routes();
Route::get('/admin/index', 'AdminController@index');
Route::get('/', 'UserController@index');
Route::get('/course', 'UserController@course');
Route::get('/blog', 'UserController@blog');
Route::get('/registeration', 'UserController@register');
