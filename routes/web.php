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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::resource('faculty', 'FacultyController');
Route::get('faculty/{faculty}', 'FacultyController@show')->name('faculty.show');
Route::resource('community', 'CommunityController');
Route::get('community/{community}', 'CommunityController@show')->name('community.show');
Route::resource('research', 'ResearchController');
Route::get('research/{research}', 'ResearchController@show')->name('research.show');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/faculty', 'FacultyController@index');
// Route::post('faculty/create', 'FacultyController@store')->name('faculty.create');
// Route::get('faculty/create', 'FacultyController@store')->name('faculty.create');
// Route::get('faculty/create', 'FacultyController@create')->name('faculty.create');
