<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
        "judul" => "Bugatti",
        "slug" => "Bugatti",
        "penulis" => "Chiron",
        "konten" => "Chiron adalah Hypercar dengan performa luar biasa yang dapat memecahkan rekor dunia."
        ],
        
        [
        "judul" => "Koenigsegg",
        "slug" => "Koenigsegg",
        "penulis" => "Agera",
        "konten" => "Agera adalah mobil supercar dari Koenigsegg yang dikenal dengan kecepatan dan teknologi canggihnya."
        ]
    ];

    public static function ambildata()
    {
        return Self:: $data_berita;
    }

    public static function caridata ($slug)
    {
        $data_beritas = Self:: $data_berita;

            $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if ($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }
}