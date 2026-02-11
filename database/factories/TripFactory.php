<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Taxi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              'departure_city_id'=> City::inRandomOrder()->value('id'),
             'arrival_city_id'=> City::inRandomOrder()->value('id'),
              'taxi_id'=> Taxi::inRandomOrder()->value('id'),
              'departure_datetime'=>now(),
              'base_price'=>fake()->randomFloat(2,20,100),
            'status'=>fake()->randomElement(['waiting', 'ongoing', 'completed', 'cancelled']),
        ];
    }
}
