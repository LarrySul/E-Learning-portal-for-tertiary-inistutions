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

Route::get('/', 'StudentController@index');
Route::get('/course', 'StudentController@store');
Route::get('/blog', 'StudentController@blog');
Route::get('/registeration', 'StudentController@show');
Route::get('/userlogin', 'StudentController@login');

Route::post('/userlogin', 'StudentController@signin');
Route::get('/user', 'StudentController@signin');

// admin get routes
Route::get('/home', 'UserController@home');
Route::get('/admin/index', 'UserController@index');
Route::get('/professor', 'LecturerController@index');
Route::get('/addprofessor', 'LecturerController@create');
Route::get('/profile&{id}', 'LecturerController@edit');
Route::get('/admincourse', 'CourseController@show');
Route::get('/addcourse', 'CourseController@create');
Route::get('/courseinfo&{id}', 'CourseController@edit');
Route::get('/student', 'StudentController@index');
Route::get('/addstudent', 'StudentController@addstudent');
Route::get('/department', 'DepartmentController@show');
Route::post('/upload', 'UserController@store');
Route::post('/addprofessor', 'LecturerController@store');
Route::post('/addcourse', 'CourseController@store');
Route::post('/department', 'DepartmentController@store');
Route::delete('/delete', 'DepartmentController@destroy');


// from front end
Route::post('/registeration','StudentController@create');

