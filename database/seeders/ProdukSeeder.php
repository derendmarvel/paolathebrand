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
            'size' => "Free Size",
            'harga' => "97500",
            'foto' => "/images/Cassie-Top-Black.png",
            'deskripsi' => "This is a black variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
            'stok' => "12",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Cassie Top",
            'warna' => "White",
            'harga' => "97500",
            'size' => "Free Size",
            'foto' => "/images/Cassie-Top-White.png",
            'deskripsi' => "This is a white variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
            'stok' => "12",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Cassie Top",
            'warna' => "Brown",
            'size' => "Free Size",
            'harga' => "97500",
            'foto' => "/images/Cassie-Top-Brown.png",
            'deskripsi' => "This is a brown variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
            'stok' => "12",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Dulcie Top",
            'warna' => "Grey",
            'size' => "Free Size",
            'harga' => "84000",
            'foto' => "/images/Dulcie-Top-Grey.png",
            'deskripsi' => "This is a minimalistic grey top designed for casual outings in the summer. Made from nylon and spandex.",
            'stok' => "11",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Dulcie Top",
            'warna' => "Brown",
            'size' => "Free Size",
            'harga' => "84000",
            'foto' => "/images/Dulcie-Top-Brown.png",
            'deskripsi' => "This is a minimalistic brown top designed for casual outings in the summer. Made from nylon and spandex.",
            'stok' => "11",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Dulcie Top",
            'warna' => "Black",
            'size' => "Free Size",
            'harga' => "84000",
            'foto' => "/images/Dulcie-Top-Black.png",
            'deskripsi' => "This is a minimalistic black top designed for casual outings in the summer. Made from nylon and spandex.",
            'stok' => "11",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Dulcie Top",
            'warna' => "White",
            'size' => "Free Size",
            'harga' => "84000",
            'foto' => "/images/Dulcie-Top-White.png",
            'deskripsi' => "This is a minimalistic white top designed for casual outings in the summer. Made from nylon and spandex.",
            'stok' => "11",
            'kategori_id' => "2"
        ]);

        DB::table('produks')->insert([
            'nama' => "Circe Dress",
            'warna' => "Black",
            'size' => "Free Size",
            'harga' => "133900",
            'foto' => "/images/Circe-Dress-Black.png",
            'deskripsi' => "This is a minimalistic black dress designed for casual outings in the summer. Made from rayon.",
            'stok' => "11",
            'kategori_id' => "1"
        ]);

        DB::table('produks')->insert([
            'nama' => "Circe Dress",
            'warna' => "Red",
            'size' => "Free Size",
            'harga' => "133900",
            'foto' => "/images/Circe-Dress-Red.png",
            'deskripsi' => "This is a minimalistic red dress designed for casual outings in the summer. Made from rayon.",
            'stok' => "11",
            'kategori_id' => "1"
        ]);

        DB::table('produks')->insert([
            'nama' => "Jennie Top",
            'warna' => "Black",
            'size' => "S, M, L",
            'harga' => "79500",
            'foto' => "/images/Jennie-Top.png",
            'deskripsi' => "This is a ladylike black top designed for casual outings in the summer. Made from rib knit.",
            'stok' => "11",
            'kategori_id' => "2"
        ]);
    }
}
