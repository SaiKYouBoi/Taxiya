<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\Seat;


class BookingSeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $usedSeats = [];
        
        $seat = Seat::whereNotIn('id', $usedSeats)->inRandomOrder()->first();
        
        if ($seat) {
            $usedSeats[] = $seat->id;
        }
        
        return [
            'booking_id' => Booking::inRandomOrder()->value('id'),
            'seat_id' => $seat?->id ?? Seat::factory(),
            'price' => fake()->randomFloat(2, 20, 200),
        ];
    }
}