<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Persib Bandung",
            "slug" =>  "persib-bandung",
            "penulis" => "alif",
            "konten" => "Persib Bandung Memenangkan pertandingan melawan Bangkok United dengan skor 2-0 di ajang AFC Cup 2025.",
        ],
        [
            "judul" => "Persip Pekalongan",
            "slug" => "persip-pekalongan",
            "penulis" => "fairuz",
            "konten" => "Persatuan Sepak Bola Indonesia Pekalongan atau Persip Pekalongan adalah klub sepak bola Indonesia dari Kota Pekalongan yang bermain di Liga 3. Persip Pekalongan berdiri tahun 1955. Persip Pekalongan memiliki julukan Laskar Kalong. Tim Kebanggaan Masyarakat Pantura ini biasa di kenal dengan sebutan (Pekalongan Raya) yang meliputi Kota Pekalongan, Kabupaten Pekalongan, Daerah Kajen. Persip Pekalongan memiliki suporter fanatik Brigata Batik City, Kalong Mania, Sneper, dan Batbois. Tim ini bermarkas di Stadion Jenderal Hoegeng (Kompleks Olah Raga Kraton) Kota Pekalongan",
        ],
        [
            "judul" => "Chelsea FC",
            "slug" => "chelsea-fc",
            "penulis" => "raffa",
            "konten" => "Chelsea juga merupakan satu-satunya klub asal London yang berhasil meraih gelar juara Liga Champions UEFA dan Piala Dunia Antarklub FIFA.",
        ],
    ];

    public static function ambildata()
    {
        return $self(self::$data_berita);
    }

    public static function caridata($slug)
    {
        $data_berita = $self::$data_berita;

        $new_berita = [];

        foreach ($data_berita as $berita) {
            if ($berita["slug"] === $slug) {
                $new_berita = $berita; /// $berita => [judul,slug,penulis,konten]
            }
        }
        return $new_berita;
    }
}
