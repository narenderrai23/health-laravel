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
                'description' => 'Aditya Birla is a renowned insurance provider offering a range of insurance solutions.',
            ],
            [
                'name' => 'Niva Bupa',
                'image_path' => 'images/Insurance/Niva-Bupa.jpg',
                'description' => 'Niva Bupa provides comprehensive health insurance plans to meet diverse needs.',
            ],
            [
                'name' => 'ICICI Lombard',
                'image_path' => 'images/Insurance/ICICI-Lombard.jpg',
                'description' => 'ICICI Lombard is a leading insurer known for its extensive range of insurance products.',
            ],
            [
                'name' => 'Bajaj Allianz',
                'image_path' => 'images/Insurance/Bajaj-Allianz.jpg',
                'description' => 'Bajaj Allianz offers a variety of insurance plans tailored to customer needs.',
            ],
            [
                'name' => 'Star Health',
                'image_path' => 'images/Insurance/Star-Health.jpg',
                'description' => 'Star Health specializes in health insurance with innovative solutions.',
            ],
        ];

        foreach ($companies as $company) {
            Insurance::create($company);
        }
    }

}
