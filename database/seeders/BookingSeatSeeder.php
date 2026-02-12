<?php

namespace Database\Seeders;

use App\Models\BookingSeat;
use App\Models\Booking;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class BookingSeatSeeder extends Seeder
{
    public function run(): void
    {
        $bookings = Booking::all();

        foreach ($bookings as $booking) {
            // Get trip
            $trip = Trip::find($booking->trip_id);
            
            if (!$trip) continue;
            
            // Get available seats for this trip
            $availableSeats = Seat::where('trip_id', $booking->trip_id)
                ->where('status', 'available')
                ->inRandomOrder()
                ->limit(rand(1, 2))
                ->get();

            foreach ($availableSeats as $seat) {
                // Apply 20% surcharge for front seats (1-2)
                $price = $trip->base_price;
                if (in_array($seat->seat_number, [1, 2])) {
                    $price = $price * 1.2;
                }

                BookingSeat::create([
                    'booking_id' => $booking->id,
                    'seat_id' => $seat->id,
                    'price' => $price,
                ]);

                // Update seat status
                $seat->update(['status' => 'reserved']);
            }

            // Update trip available seats
            $trip->update([
                'available_seats' => Seat::where('trip_id', $trip->id)
                    ->where('status', 'available')
                    ->count()
            ]);
        }
    }
}
