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

//guest
Route::get('/', 'HomeController@index');
//user atau admin
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/search', 'HomeController@search');


//admin
Route::get('/manage/movie', 'MovieController@index')->middleware('role');
Route::get('/manage/movie/addMovie', 'MovieController@create')->middleware('role');
Route::post('/manage/movie', 'MovieController@store')->middleware('role');
Route::get('/manage/movie/{movie}/edit', 'MovieController@edit')->middleware('role');
Route::post('/manage/movie/{movie}', 'MovieController@update')->middleware('role');
Route::delete('manage/movie/{movie}', 'MovieController@destroy')->middleware('role');

Route::get('/manage/genre', 'GenreController@index')->middleware('role');
Route::get('/manage/genre/addGenre', 'GenreController@create')->middleware('role');
Route::post('/manage/genre', 'GenreController@store')->middleware('role');
Route::get('/manage/genre/{genre}/edit', 'GenreController@edit')->middleware('role');
Route::post('/manage/genre/{genre}', 'GenreController@update')->middleware('role');
Route::delete('manage/genre/{genre}', 'GenreController@destroy')->middleware('role');

Route::get('/manage/user', 'UserController@index')->middleware('role');
Route::get('/manage/user/addUser', 'UserController@create')->middleware('role');
Route::post('/manage/user', 'UserController@store')->middleware('role');
Route::get('/manage/user/{user}/edit', 'UserController@edit')->middleware('role');
Route::post('/manage/user/{user}', 'UserController@update')->middleware('role');
Route::delete('manage/user/{user}', 'UserController@destroy')->middleware('role');

//untuk save movie
Route::get('/save', 'SaveController@index')->middleware('auth');
Route::post('/save/{movie}', 'SaveController@store')->middleware('auth');
Route::delete('/save/{save}', 'SaveController@destroy')->middleware('auth');





//user
Route::get('/users/{user}/profile', 'ProfileController@show')->middleware('auth');
Route::get('/user/{user}/profile/edit', 'ProfileController@edit')->middleware('auth');
Route::post('/user/{user}/profile', 'ProfileController@update')->middleware('auth');


//Comment
Route::post('/movie/comment', 'CommentsController@store');
Route::delete('/movie/{comments}', 'CommentsController@destroy');


//Message
Route::get('/inbox', 'MessageController@index')->middleware('auth');
Route::post('/inbox/message', 'MessageController@store')->middleware('auth');
Route::delete('/inbox/{message}', 'MessageController@destroy')->middleware('auth');

//movie detail
Route::get('/movie/{movie}', 'MovieController@show');






