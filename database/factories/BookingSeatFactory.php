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
        return [
            'booking_id' => Booking::inRandomOrder()->value('id'),
            'seat_id' => Seat::inRandomOrder()->value('id'),
            'final_price' => fake()->randomFloat(2, 20, 200),
        ];
    }
}