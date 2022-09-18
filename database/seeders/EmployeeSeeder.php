<?php

namespace Database\Seeders;

use domain\Facades\EmployeeFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['first_name' => 'bill', 'last_name' => 'samson', 'email' => 'bill@gmail.com'],
            ['first_name' => 'diana', 'last_name' => 'lorrence', 'email' => 'diana@gmail.com'],
            ['first_name' => 'john', 'last_name' => 'smith', 'email' => 'john@gmail.com'],
            ['first_name' => 'smith', 'last_name' => 'clerk', 'email' => 'smith@gmail.com'],
            ['first_name' => 'jackson', 'last_name' => 'anthony', 'email' => 'jackson@gmail.com'],

        ];
        foreach ($array as $data) {
            $value = EmployeeFacade::getByEmail($data['email']);
            if (!$value) {
                EmployeeFacade::make($data);
            }
        }
    }
}
