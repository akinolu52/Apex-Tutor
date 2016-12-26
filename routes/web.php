<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/menu/practise', function () {
    return view('practise');
});
Route::get('/menu/practise/{subject}', function ($subject) {
    echo 'Subject : '.$subject;
    //return view('practise');
});

Route::get('/menu/challenge', function () {
    return view('challenge');
});
Route::get('/menu/challenge/{subject}', function ($subject) {
    return view('challenge');
});

Route::get('/menu/attack', function () {
    return view('attack');
});
Route::get('/menu/attack/{subject}', function ($subject) {
    return view('attack');
});
