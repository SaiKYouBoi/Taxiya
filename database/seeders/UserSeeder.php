<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'role' => 'admin',
            'validated_at' => now(),
        ]);


        User::factory()->count(5)->create([
            'role' => 'driver',
            'validated_at' => now(),
        ]);

       
        User::factory()->count(20)->create([
            'role' => 'traveler',
        ]);
    }
}