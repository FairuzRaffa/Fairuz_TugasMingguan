<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
        "judul" => "Pekalongan",
        "slug" => "pekalongan",
        "penulis" => "PERSIP",
        "konten" => "PERSIP (Persatuan Sepak Bola Indonesia Pekalongan) adalah klub sepak bola Indonesia yang bermarkas di Kota Pekalongan. Tim ini berkompetisi di Liga 4."
        ],
        
        [
        "judul" => "Bandung",
        "slug" => "bandung",
        "penulis" => "PERSIB",
        "konten" => "PERSIB adalah klub sepak bola Indonesia yang berbasis di Kota Bandung, Jawa Barat, dan saat ini merupakan peserta dari kompetisi tertinggi Indonesia, Liga 1."
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