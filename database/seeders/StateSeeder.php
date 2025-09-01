<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run()
    {
        $states = [
            [
                'country_id'     => 1,
                'name'           => 'Punjab',
                'sef_url'        => 'punjab',
                'publish_status' => 'yes',
            ],
            [
                'country_id'     => 1,
                'name'           => 'Sindh',
                'sef_url'        => 'sindh',
                'publish_status' => 'yes',
            ],
            [
                'country_id'     => 2,
                'name'           => 'California',
                'sef_url'        => 'california',
                'publish_status' => 'yes',
            ],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
