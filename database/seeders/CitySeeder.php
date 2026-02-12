<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            'Marrakech',
            'Casablanca',
            'Agadir',
            'Tanger',
            'Fes',
            'Rabat',
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
