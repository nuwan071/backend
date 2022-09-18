<?php

namespace Database\Seeders;

use domain\Facades\ShiftFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'shift 1', 'slug' => 'S1', 'start_time' => '06:00', 'shift_length' => '8'],
            ['name' => 'shift 2', 'slug' => 'S2', 'start_time' => '02:00', 'shift_length' => '8'],
            ['name' => 'shift 3', 'slug' => 'S3', 'start_time' => '10:00', 'shift_length' => '8'],

        ];
        foreach ($array as $data) {
            $value = ShiftFacade::getBySlug($data['slug']);
            if (!$value) {
                ShiftFacade::make($data);
            }
        }
    }
}
