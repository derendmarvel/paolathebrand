<?php

namespace Database\Seeders;

use App\Models\Kategori;
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
        foreach(Kategori::all() as $kategori){

            if($kategori['id'] == 2){
                DB::table('produks')->insert([
                    'nama' => "Cassie Top",
                    'warna' => "Black",
                    'size' => "Free Size",
                    'harga' => "97500",
                    'foto' => "/images/Cassie-Top-Black.jpg",
                    'deskripsi' => "This is a black variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
                    'stok' => "12",
                    'link' => "https://shopee.co.id/Cassie-Top-i.1004486511.23771277936?xptdk=e9efba20-74d6-4683-969a-4c392c2e3e8d",
                    // 'kategori_id' => "2",
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Cassie Top",
                    'warna' => "White",
                    'harga' => "97500",
                    'size' => "Free Size",
                    'foto' => "/images/Cassie-Top-White.jpg",
                    'deskripsi' => "This is a white variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
                    'stok' => "12",
                    'link' => "https://shopee.co.id/Cassie-Top-i.1004486511.23771277936?xptdk=e9efba20-74d6-4683-969a-4c392c2e3e8d",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Cassie Top",
                    'warna' => "Brown",
                    'size' => "Free Size",
                    'harga' => "97500",
                    'foto' => "/images/Cassie-Top-Brown.jpg",
                    'deskripsi' => "This is a brown variant of the Cassie Cropped Top made of Faux Leather & Lace. Fit for summer and casual outings.",
                    'stok' => "12",
                    'link' => "https://shopee.co.id/Cassie-Top-i.1004486511.23771277936?xptdk=e9efba20-74d6-4683-969a-4c392c2e3e8d",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Dulcie Top",
                    'warna' => "Grey",
                    'size' => "Free Size",
                    'harga' => "84000",
                    'foto' => "/images/Dulcie-Top-Grey.jpg",
                    'deskripsi' => "This is a minimalistic grey top designed for casual outings in the summer. Made from nylon and spandex.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Dulcie-Top-i.1004486511.21780995597?xptdk=e272c87d-8665-4bb5-b706-5efd541039c6",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Dulcie Top",
                    'warna' => "Brown",
                    'size' => "Free Size",
                    'harga' => "84000",
                    'foto' => "/images/Dulcie-Top-Brown.jpg",
                    'deskripsi' => "This is a minimalistic brown top designed for casual outings in the summer. Made from nylon and spandex.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Dulcie-Top-i.1004486511.21780995597?xptdk=e272c87d-8665-4bb5-b706-5efd541039c6",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Dulcie Top",
                    'warna' => "Black",
                    'size' => "Free Size",
                    'harga' => "84000",
                    'foto' => "/images/Dulcie-Top-Black.png",
                    'deskripsi' => "This is a minimalistic black top designed for casual outings in the summer. Made from nylon and spandex.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Dulcie-Top-i.1004486511.21780995597?xptdk=e272c87d-8665-4bb5-b706-5efd541039c6",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Dulcie Top",
                    'warna' => "White",
                    'size' => "Free Size",
                    'harga' => "84000",
                    'foto' => "/images/Dulcie-Top-White.png",
                    'deskripsi' => "This is a minimalistic white top designed for casual outings in the summer. Made from nylon and spandex.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Dulcie-Top-i.1004486511.21780995597?xptdk=e272c87d-8665-4bb5-b706-5efd541039c6",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Jennie Top",
                    'warna' => "Black",
                    'size' => "S, M, L",
                    'harga' => "79500",
                    'foto' => "/images/Jennie-Top.jpg",
                    'deskripsi' => "This is a ladylike black top designed for casual outings in the summer. Made from rib knit.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Jennie-Top-i.1004486511.14499025441?xptdk=f417ae0c-280f-4cc6-b7ff-5c26bf798719",
                    // 'kategori_id' => "2"
                    'kategori_id' => $kategori['id']
                ]);
            }
            else {
                DB::table('produks')->insert([
                    'nama' => "Circe Dress",
                    'warna' => "Red",
                    'size' => "Free Size",
                    'harga' => "133900",
                    'foto' => "/images/Circe-Dress-Red.jpg",
                    'deskripsi' => "This is a minimalistic red dress designed for casual outings in the summer. Made from rayon.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Circe-Dress-i.1004486511.17197853022?xptdk=907729d5-50ec-4abe-b3b2-4cf4c49dedef",
                    // 'kategori_id' => "1"
                    'kategori_id' => $kategori['id']
                ]);

                DB::table('produks')->insert([
                    'nama' => "Circe Dress",
                    'warna' => "Black",
                    'size' => "Free Size",
                    'harga' => "133900",
                    'foto' => "/images/Circe-Dress-Black.jpg",
                    'deskripsi' => "This is a minimalistic black dress designed for casual outings in the summer. Made from rayon.",
                    'stok' => "11",
                    'link' => "https://shopee.co.id/Circe-Dress-i.1004486511.17197853022?xptdk=907729d5-50ec-4abe-b3b2-4cf4c49dedef",
                    // 'kategori_id' => "1"
                    'kategori_id' => $kategori['id']
                ]);
            }

        }
    }
}
