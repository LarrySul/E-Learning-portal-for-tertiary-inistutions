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


Auth::routes();

Route::get('/', 'UserController@index');
Route::get('/course', 'UserController@course');
Route::get('/blog', 'UserController@blog');
Route::get('/registeration', 'UserController@register');


// admin get routes
Route::get('/home', 'AdminController@home');
Route::get('/admin/index', 'AdminController@index');
Route::get('/professor', 'LecturerController@index');
Route::get('/addprofessor', 'LecturerController@create');
Route::get('/profile&{id}', 'LecturerController@edit');
Route::get('/admincourse', 'CourseController@index');
Route::get('/addcourse', 'CourseController@add');
Route::get('/courseinfo', 'CourseController@info');
Route::get('/student', 'StudentController@index');
Route::get('/addstudent', 'StudentController@addstudent');
Route::get('/department', 'DepartmentController@index');
Route::get('/departmentadd', 'DepartmentController@add');


// admin post routes
Route::post('/upload', 'AdminController@update_avatar');
Route::post('/addprofessor', 'LecturerController@store');

