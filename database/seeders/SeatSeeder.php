<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 6 seats for each trip
        \App\Models\Trip::all()->each(function ($trip) {
            for ($i = 1; $i <= 6; $i++) {
                Seat::create([
                    'trip_id' => $trip->id,
                    'seat_number' => $i,
                    'status' => 'available',
                ]);
            }
        });
    }
}
