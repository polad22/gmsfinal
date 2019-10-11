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

Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');

Route::middleware('auth')->group(function() {
Route::get('/subjects', 'SubjectsController@index');
Route::get('/subjects/add', 'SubjectsController@create');
Route::post('/subjects/store', 'SubjectsController@store');
Route::get('/subjects/{subject}', 'SubjectsController@show');
Route::get('/subjects/{subject}/edit', 'SubjectsController@edit');
Route::post('/subjects/{subject}/update', 'SubjectsController@update');

Route::get('/strands', 'StrandsController@index');
Route::get('/strands/add', 'StrandsController@create');
Route::post('/strands/store', 'StrandsController@store');

Route::get('/teacher-loads', 'TeacherLoadsController@index');
Route::post('/teacher-loads/store', 'TeacherLoadsController@store');

Route::get('/teachers', 'TeachersController@index');
Route::get('/teachers/add', 'TeachersController@create');
Route::post('/teachers/store', 'TeachersController@store');
Route::get('/teachers/{teacher}', 'TeachersController@show');
Route::get('/teachers/{teacher}/edit', 'TeachersController@edit');
Route::post('/teachers/{teacher}/update', 'TeachersController@update');

Route::get('/sections', 'SectionsController@index');
Route::get('/sections/add', 'SectionsController@create');
Route::post('/sections/store', 'SectionsController@store');
Route::get('/sections/{section}', 'SectionsController@show');
Route::get('/sections/{section}/edit', 'SectionsController@edit');
Route::post('/sections/{section}/update', 'SectionsController@update');

Route::get('/subject-strands', 'SubjectstrandsController@index');
Route::get('/subject-strands/add', 'SubjectstrandsController@create');
Route::post('/subject-strands/store', 'SubjectstrandsController@store');
});