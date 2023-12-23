<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('adminpaola123'),
            'role_id'=> 1,
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Steffany',
            'email' => 'steffany@gmail.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('12345678'),
            'role_id'=> 2,
            'remember_token' => Str::random(10),
        ]);
    }
}
