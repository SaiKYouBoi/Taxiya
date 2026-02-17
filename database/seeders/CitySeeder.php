<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            // Major metropolitan cities
            'Casablanca',
            'Rabat',
            'Fes',
            'Marrakech',
            'Agadir',
            'Tangier',
            'Meknes',
            'Oujda',
            'Kenitra',
            'Tetouan',

            // Northern cities
            'Larache',
            'Ksar El Kebir',
            'Chefchaouen',
            'Al Hoceima',
            'Fnideq',
            'Martil',
            'Mdiq',
            'Asilah',

            // Central cities
            'Mohammedia',
            'Benslimane',
            'Settat',
            'Berrechid',
            'Khouribga',
            'El Jadida',
            'Safi',
            'Youssoufia',
            'Sidi Bennour',

            // Rabat region
            'Sale',
            'Temara',
            'Skhirat',
            'Tiflet',
            'Sidi Kacem',
            'Sidi Slimane',

            // Fes-Meknes region
            'Ifrane',
            'Azrou',
            'Sefrou',
            'Taounate',
            'Boulemane',

            // Marrakech region
            'Essaouira',
            'El Kelaa des Sraghna',
            'Benguerir',
            'Chichaoua',

            // Souss-Massa region
            'Inezgane',
            'Taroudant',
            'Tiznit',
            'Chtouka Ait Baha',

            // Oriental region
            'Nador',
            'Berkane',
            'Taourirt',
            'Jerada',
            'Guercif',

            // Beni Mellal-Khenifra
            'Beni Mellal',
            'Khenifra',
            'Fquih Ben Salah',
            'Azilal',

            // Draa-Tafilalet
            'Errachidia',
            'Ouarzazate',
            'Midelt',
            'Zagora',
            'Tinghir',

            // Southern cities
            'Laayoune',
            'Dakhla',
            'Guelmim',
            'Tan-Tan',
            'Sidi Ifni',
            'Tarfaya',
            'Smara',
            'Boujdour',

        ];


        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
