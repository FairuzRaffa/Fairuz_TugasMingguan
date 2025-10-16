<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Muhammad Alif Faruz Raffa",
        "nohp" => "089618459602",
        "foto" => "img/fairuz.jpg",
    ]);
});

Route::get('/berita',[BeritaController::class, 'index'] );
Route::get('/berita/{slug}',[BeritaController::class, 'tampildata'] );

Route::get('/amahasiswa',[MahasiswaController::class, 'index'] );

Route::get('/berita', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});

