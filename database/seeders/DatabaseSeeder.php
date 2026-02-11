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
            UserSeeder::class,
            CitySeeder::class,
            TaxiSeeder::class,
            TripSeeder::class,
            SeatSeeder::class,
            BookingSeeder::class,
            BookingSeatSeeder::class,
            PaymentSeeder::class,
            ReviewSeeder::class,
        ]);
        
    }
}
