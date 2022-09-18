<?php

namespace Database\Seeders;

use domain\Facades\LocationFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'Location 1', 'slug' => 'L1', 'address' => 'Montana'],
            ['name' => 'Location 2', 'slug' => 'L2', 'address' => 'New York'],
        ];
        foreach ($array as $data) {
            $value = LocationFacade::getBySlug($data['slug']);
            if (!$value) {
                LocationFacade::make($data);
            }
        }
    }
}
