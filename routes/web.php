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

//guest
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/a', function () {
        return view('login');
    });

    Route::get('/b', function () {
        return view('register');
    });

// member
    
    Route::get('/c', function () {
        return view('member.memberHome');
    });



