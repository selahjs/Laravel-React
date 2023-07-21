<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       
        Region::create([
            'region_name' => 'Midlands Region'
        ]);

        Region::create([
            'region_name' => 'Highlands Region'
        ]);

        Region::create([
            'region_name' => 'Low Lands'
        ]);
    }
}
