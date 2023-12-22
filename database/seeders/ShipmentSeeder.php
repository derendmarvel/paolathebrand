<?php

namespace Database\Seeders;

use App\Models\Shipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shipment::create([
            'name' => 'JNE'
        ]);
        Shipment::create([
            'name' => 'POS Indonesia'
        ]);
        Shipment::create([
            'name' => 'TIKI'
        ]);
    }
}
