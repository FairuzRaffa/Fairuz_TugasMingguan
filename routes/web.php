<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/contact', function () {
    return view('contact');
});
