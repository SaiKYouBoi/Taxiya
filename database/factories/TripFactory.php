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
        $departureCity = City::inRandomOrder()->first() ?? City::factory()->create();
        $arrivalCity = City::inRandomOrder()->where('id', '!=', $departureCity->id)->first()
            ?? City::factory()->create();

        return [
              'departure_city_id'=> $departureCity,
             'arrival_city_id'=> $arrivalCity,
              'taxi_id'=> Taxi::inRandomOrder()->value('id'),
            'departure_datetime' => $departure = $this->faker->dateTimeBetween('+1 days', '+7 days'),
            'arrival_datetime' => $this->faker->dateTimeBetween($departure, '+7 days'),
              'base_price'=>fake()->randomFloat(2,20,100),
            'status'=>fake()->randomElement(['waiting', 'ongoing', 'completed', 'cancelled']),
            'available_seats' => $this->faker->numberBetween(0, 6),
        ];
    }
}