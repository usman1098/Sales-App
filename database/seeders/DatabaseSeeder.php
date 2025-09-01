<?php

namespace Database\Seeders;

use App\Models\Superadmin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "employee_code"    => "EMP001",
            "employee_name"    => "Admin",
            "employee_email"   => "admin@gmail.com",
            "password"         => Hash::make('123456cp'),
            "active"           => 'yes',
            "city_id"          => 1,
            "line_manger_id"   => 0,
            "phone"            => "03001234567",
            "designation"      => "System Administrator",
            "created_at"=> now(),
        ]);
        
    //     $this->call([
    //     CountrySeeder::class,
    //     StateSeeder::class,
    //     CitySeeder::class,
    //     CityAreaSeeder::class,
    //     RegionSeeder::class,
    //    ]);

    }

}
