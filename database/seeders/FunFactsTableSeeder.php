<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunFactsTableSeeder extends Seeder
{
    public function run()
    {
        // Define the fun facts data
        $funFacts = [
            [
                'icon' => 'flaticon-happiness', // Example icon class
                'count' => 3231,
                'title' => 'Happy Patients'
            ],
            [
                'icon' => 'flaticon-cancer', // Example icon class
                'count' => 2435,
                'title' => 'Treatment'
            ],
            [
                'icon' => 'flaticon-trophy', // Example icon class
                'count' => 190,
                'title' => 'Awards'
            ],
        ];

        // Insert data into the fun_facts table
        DB::table('fun_facts')->insert($funFacts);
    }
}
