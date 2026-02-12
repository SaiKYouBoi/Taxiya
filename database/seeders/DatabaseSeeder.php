<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            UserSeeder::class,
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
