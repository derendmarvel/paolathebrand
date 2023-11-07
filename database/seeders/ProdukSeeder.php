<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            'nama' => "Circle Dress",
            'warna' => "Black",
            'size' => "Free Size, Length: 115 cm, Bust: up to 90 cm",
            'harga' => "133500",
            'foto' => "",
            'deskripsi' => "",
            'stok' => "5",
            'foreignId' => $kategori
        ]);

        DB::table('produks')->insert([
            'nama' => "Circle Dress",
            'warna' => "Red",
            'size' => "Free Size, Length: 115 cm, Bust: up to 90 cm",
            'harga' => "133500",
            'foto' => "",
            'deskripsi' => "",
            'stok' => "3",
            'foreignId' => $kategori
        ]);
    }
}
