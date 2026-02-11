<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Taxi>
 */
class TaxiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
        [
            'license_plate' => fake()->bothify('??-###-??'),
            'model' => fake()->word(),
            'vehicule_make' => fake()->company(),
            'year_manufacture' => fake()->year(),
            'taxi_mumber' => fake()->unique()->numberBetween(100, 9999),
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
        ];
    }
}
