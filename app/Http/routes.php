<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/alumini', function () {
    return view('alumini');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/serversecurity', function () {
    return view('service');
});

Route::get('/webapplication', function () {
    return view('webapp');
});

Route::get('/android', function () {
    return view('android');
});

Route::get('/cprogram', function () {
    return view('c');
});

Route::get('/cppprogram', function () {
    return view('cppprogram');
});

Route::get('/java', function () {
    return view('java');
});

Route::get('/phpprogram', function () {
    return view('php');
});

Route::get('/frontend', function () {
    return view('front');
});

Route::get('/python', function () {
    return view('python');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/txntest', function () {
    return view('txntest');
});

Route::get('/profile', function () {
    return view('display');
});

