<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Fairuz Raffa",
        "nohp" => "089618459602",
        "foto" => "img/fairuz.jpg",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Persib Bandung",
            "penulis" => "alif",
            "konten" => "Persib Bandung Memenangkan pertandingan melawan Bangkok United dengan skor 2-0 di ajang AFC Cup 2025.",
        ],
        [
            "judul" => "Persip Pekalongan",
            "penulis" => "fairuz",
            "konten" => "Persatuan Sepak Bola Indonesia Pekalongan atau Persip Pekalongan adalah klub sepak bola Indonesia dari Kota Pekalongan yang bermain di Liga 3. Persip Pekalongan berdiri tahun 1955. Persip Pekalongan memiliki julukan Laskar Kalong. Tim Kebanggaan Masyarakat Pantura ini biasa di kenal dengan sebutan (Pekalongan Raya) yang meliputi Kota Pekalongan, Kabupaten Pekalongan, Daerah Kajen. Persip Pekalongan memiliki suporter fanatik Brigata Batik City, Kalong Mania, Sneper, dan Batbois. Tim ini bermarkas di Stadion Jenderal Hoegeng (Kompleks Olah Raga Kraton) Kota Pekalongan",
        ],
        [
            "judul" => "Chelsea FC",
            "penulis" => "raffa",
            "konten" => "Chelsea juga merupakan satu-satunya klub asal London yang berhasil meraih gelar juara Liga Champions UEFA dan Piala Dunia Antarklub FIFA.",
        ],
    ];
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});