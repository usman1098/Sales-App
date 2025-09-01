<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Pakistan',
                'sef_url' => 'pakistan',
                'code' => 'PK',
                'publish_status' => 'yes',
            ],
            [
                'name' => 'United States',
                'sef_url' => 'united-states',
                'code' => 'US',
                'publish_status' => 'yes',
            ],
            [
                'name' => 'United Kingdom',
                'sef_url' => 'united-kingdom',
                'code' => 'UK',
                'publish_status' => 'yes',
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
