<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    public function run(): void
    {
        $trips = Trip::all();

        foreach ($trips as $trip) {
            // Create 6 seats for each trip (1-2 front, 3-6 back)
            for ($seatNumber = 1; $seatNumber <= 6; $seatNumber++) {
                Seat::create([
                    'trip_id' => $trip->id,
                    'seat_number' => $seatNumber,
                    'status' => 'available',
                ]);
            }
        }
    }
}
