<?php

namespace Database\Seeders;

use App\Models\Insurance;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => 'Aditya Birla',
                'image_path' => 'images/Insurance/Aditya-Birla.jpg',
            ],
            [
                'name' => 'Niva Bupa',
                'image_path' => 'images/Insurance/Niva-Bupa.jpg',
            ],
            [
                'name' => 'ICICI Lombard',
                'image_path' => 'images/Insurance/ICICI-Lombard.jpg',
            ],
            [
                'name' => 'Bajaj Allianz',
                'image_path' => 'images/Insurance/Bajaj-Allianz.jpg',
            ],
            [
                'name' => 'Star Health',
                'image_path' => 'images/Insurance/Star-Health.jpg',
            ],
        ];

        foreach ($companies as $company) {
            Insurance::create($company);
        }
    }
}
