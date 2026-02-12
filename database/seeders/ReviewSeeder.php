<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        // Create reviews for some confirmed/paid bookings
        $bookings = Booking::whereIn('status', ['confirmed', 'paid'])
            ->inRandomOrder()
            ->limit(10)
            ->get();

        foreach ($bookings as $booking) {
            Review::create([
                'booking_id' => $booking->id,
                'user_id' => $booking->user_id,
                'rating' => rand(3, 5), // Ratings between 3-5 stars
            ]);
        }
    }
}
