<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id'=> Booking::inRandomOrder()->value('id'),
            'amount'=>fake()->randomFloat(2,20,500),
            'methode'=>fake()->randomElement(['card','cash','wallet']),
            'payment_date'=>now(),
        ];
    }
}

