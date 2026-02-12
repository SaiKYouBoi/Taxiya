<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\User;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $travelers = User::where('role', 'traveler')->get();
        $trips = Trip::all();

        // Create 15 bookings
        for ($i = 0; $i < 15; $i++) {
            $traveler = $travelers->random();
            $trip = $trips->random();

            Booking::create([
                'user_id' => $traveler->id,
                'trip_id' => $trip->id,
                'total_price' => $trip->base_price * rand(1, 3), // 1-3 seats
                'status' => ['pending', 'confirmed', 'paid'][rand(0, 2)],
            ]);
        }
    }
}
