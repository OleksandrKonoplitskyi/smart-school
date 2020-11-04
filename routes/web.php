<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});

Route::get('school-diary', function () {
    return view('school_diary');
});

Route::get('school-diary-timeline', function () {
    return view('school_diary_timeline');
});

Route::get('parents-timeline', function () {
    return view('parents_timeline');
});

Route::get('pin-code', function () {
    return view('pin_code');
});

Route::get('news', 'NewsController@index');
Route::get('news/{post}', 'NewsController@show');


Route::get('achievements', function () {
    return view('achievements');
});

Route::get('about', function () {
    return view('about');
});



