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
            'nama' => "Cassie Top",
            'warna' => "Black",
            'harga' => "97500",
            'foto' => "/images/Cassie-Top-Black.png",
            'deskripsi' => "This is a black variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
            'stok' => "12",
            // 'foreignId' => $kategori-
        ]);

        DB::table('produks')->insert([
            'nama' => "Cassie Top",
            'warna' => "White",
            'harga' => "97500",
            'foto' => "/images/Cassie-Top-White.png",
            'deskripsi' => "This is a white variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
            'stok' => "12",
            // 'foreignId' => $kategori-
        ]);

        DB::table('produks')->insert([
            'nama' => "Cassie Top",
            'warna' => "Brown",
            'harga' => "97500",
            'foto' => "/images/Cassie-Top-Brown.png",
            'deskripsi' => "This is a brown variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
            'stok' => "12",
            // 'foreignId' => $kategori-
        ]);

        DB::table('produks')->insert([
            'nama' => "Dulcie Top",
            'warna' => "Grey",
            'size' => "Free Size",
            'harga' => "84000",
            'foto' => "/images/Dulcie-Top-Grey.png",
            'deskripsi' => "This is a minimalistic grey top designed for casual outings in the summer. Made from nylon and spandex.",
            'stok' => "11",
            // 'foreignId' => $kategori
        ]);

        DB::table('produks')->insert([
            'nama' => "Dulcie Top",
            'warna' => "Brown",
            'size' => "Free Size",
            'harga' => "84000",
            'foto' => "/images/Dulcie-Top-Brown.png",
            'deskripsi' => "This is a minimalistic brown top designed for casual outings in the summer. Made from nylon and spandex.",
            'stok' => "11",
            // 'foreignId' => $kategori
        ]);
    }
}
