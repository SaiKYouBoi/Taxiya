<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            CitySeeder::class,
            UserSeeder::class,
        ]);
        $this->call([
            PaymentSeeder::class,
        ]);
        $this->call([
            ReviewSeeder::class,
        ]);
        $this->call([
            SeatSeeder::class,
            TripSeeder::class,
        ]);
    }
}
