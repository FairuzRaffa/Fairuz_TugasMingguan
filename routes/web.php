<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('halaman profile');
});
Route::get('/kontak', function () {
    return view('halaman kontak');
});
Route::get('/gallery', function () {
    return view('halaman berita');
});
