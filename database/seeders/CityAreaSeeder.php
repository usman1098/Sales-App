<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CityArea;
class CityAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            [
                'city_id'       => 1,
                'area'          => 'Gulberg',
                'publish_status'=> 'yes',
                'created_by'    => 'System',
            ],
            [
                'city_id'       => 1,
                'area'          => 'Model Town',
                'publish_status'=> 'yes',
                'created_by'    => 'System',
            ],
            [
                'city_id'       => 2,
                'area'          => 'D Ground',
                'publish_status'=> 'yes',
                'created_by'    => 'System',
            ],
        ];

        foreach ($areas as $area) {
            CityArea::create($area);
        }
    }
    
}
