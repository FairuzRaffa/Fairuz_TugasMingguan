<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "isi" => "Pada September 2020, BMW memperkenalkan BMW M4 generasi kedua. Ini berkembang 
                  jauh dibandingkan pendahulunya dengan mengadopsi gril baru. Seperti generasi sebelumnya, 
                  mobil ini dilengkapi dengan 6 silinder segaris turbocharged 3 liter. Ini mengembangkan 480
                  tenaga kuda dan hingga 510 tenaga kuda dalam versi kompetisinya. BMW menawarkan gearbox 
                  manual 6 kecepatan atau otomatis 8 kecepatan (konverter torsi). Untuk pertama kalinya di M4,
                  BMW memperkenalkan versi penggerak 4 roda.
                  Disebut M Xdrive, penggerak semua roda ini memungkinkan adanya tenaga penggerak.",
        "img1" => "img/bmw.jpeg"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Fairuz Raffa", 
        "nohp" => "08123456",
        "img" => "img/contoh.jpg"
    ]);
});

Route::get('/berita', [BeritaController::class, 'index'] );

Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'] );
Route::get('/mahasiswa', [MahasiswaController::class, 'index'] )->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'] )->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'] )->name('insertdata');

Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');
Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'] )->name('editdata');

Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'] )->name('deletedata');



Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
        "img" => "img/anaf.png"
    ]);
});