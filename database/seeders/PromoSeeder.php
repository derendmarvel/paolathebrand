<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promos')->insert([
            'name' => "#PAOLAHITS100",
            'start_date' => Carbon::create(2023, 5, 30),
            'end_date' => Carbon::create(2023, 6, 30),
            'image' => "/images/Paola-Promo-1.png",
        ]);
        DB::table('promos')->insert([
            'name' => "November Sale",
            'start_date' => Carbon::create(2023, 11, 20),
            'end_date' => Carbon::create(2023, 11, 31),
            'image' => "/images/Paola-Promo-2.png",
        ]);
    }
}
