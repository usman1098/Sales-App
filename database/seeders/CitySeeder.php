<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run()
    {
        $cities = [
            [
                'state_id'       => 1,
                'name'           => 'Lahore',
                'sef_url'        => 'lahore',
                'type'           => 'popular',
                'publish_status' => 'yes',
            ],
            [
                'state_id'       => 1,
                'name'           => 'Faisalabad',
                'sef_url'        => 'faisalabad',
                'type'           => 'normal',
                'publish_status' => 'yes',
            ],
            [
                'state_id'       => 2,
                'name'           => 'Karachi',
                'sef_url'        => 'karachi',
                'type'           => 'popular',
                'publish_status' => 'yes',
            ],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
