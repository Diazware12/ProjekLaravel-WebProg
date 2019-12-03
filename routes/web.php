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
    return view('register');
});

Route::get('/a', function () {
    return view('home');
});

Route::get('/b', function () {
    return view('member.memberHome');
});

Route::get('/c', function () {
    return view('admin.adminHome');
});

Route::get('/d', function () {
    return view('login');
});


Route::get('/e', function () {
    return view('admin.manageGenre');
});
Route::get('/f', function () {
    return view('admin.manageMovie');
});
Route::get('/g', function () {
    return view('admin.manageUser');
});

Route::get('/h', function () {
    return view('admin.addMovie');
});
Route::get('/i', function () {
    return view('admin.editMovie');
});





