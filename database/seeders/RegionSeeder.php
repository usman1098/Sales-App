<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $regions = [
            [
                'region'     => 'Karachi',
                'active'     => 'yes',
                'created_by' => 'System',
            ],
            [
                'region'     => 'Lahore',
                'active'     => 'yes',
                'created_by' => 'System',
            ],
            [
                'region'     => 'Islamabad',
                'active'     => 'yes',
                'created_by' => 'System',
            ],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
