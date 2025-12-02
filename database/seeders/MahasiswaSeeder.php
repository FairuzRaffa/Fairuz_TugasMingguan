<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nama' => "Fairuz",
            'nim' => 13256723,
            'prodi' => "Teknologi Informasi",
            'email' => "faairuzalif102.com",
            'nohp' => 62961845960,
        ]);
    }
    
}
