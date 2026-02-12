<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        // Create payments for paid bookings
        $paidBookings = Booking::where('status', 'paid')->get();

        foreach ($paidBookings as $booking) {
            Payment::create([
                'booking_id' => $booking->id,
                'amount' => $booking->total_price,
                'method' => ['card', 'cash'][rand(0, 1)],
                'payment_date' => now()->subDays(rand(0, 7)),
            ]);
        }
    }
}
