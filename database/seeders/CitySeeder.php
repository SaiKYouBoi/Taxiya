<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Tangier',
            'Rabat',
            'Casablanca',
            'Marrakech',
            'Fes',
            'Agadir',
            'Oujda',
            'Tetouan'
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}