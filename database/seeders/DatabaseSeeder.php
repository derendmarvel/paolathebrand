<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();
        
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            KategoriSeeder::class,
            ProdukSeeder::class,
            PromoSeeder::class,
            OrderSeeder::class,
            CustomerSeeder::class,
            CartSeeder::class,
            WishlistSeeder::class,
            PaymentSeeder::class,
            ShipmentSeeder::class
        ]);

        Model::reguard();
    }
}
