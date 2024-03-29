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

    
    Route::get('/c', function () {
        return view('movieDetail');
    });

    Route::get('/d', function () {
        return view('profile');
    });

// member
    
    Route::get('/e', function () {
        return view('member.memberHome');
    });
    Route::get('/f', function () {
        return view('member.memberMovieDetail');
    });

    Route::get('/g', function () {
        return view('member.memberProfile');
    });

    Route::get('/h', function () {
        return view('member.otherProfile');
    });

    Route::get('/i', function () {
        return view('member.inbox');
    });

    Route::get('/j', function () {
        return view('member.savedMovie');
    });



