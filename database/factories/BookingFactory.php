<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Trip;


class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'trip_id' => Trip::factory(),
            'qr_code' => fake()->unique()->uuid(),
            'total_price' => fake()->randomFloat(2, 50, 500),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled', 'paid']),
        ];
    }
}
