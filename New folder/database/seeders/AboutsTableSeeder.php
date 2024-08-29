<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsTableSeeder extends Seeder
{
    public function run()
    {
        // Define the about data
        $abouts = [
            [
                'title' => 'Who We Are',
                'philosophy' => 'Our mission is to provide exceptional service and create a positive impact on our community. We believe in the power of quality and innovation to drive success.',
                'contact_number' => '+1234567890',
                'image_path' => 'assets/images/about/about-image-1.jpg', // Update with the correct path if needed
            ],
        ];

        // Insert data into the abouts table
        DB::table('abouts')->insert($abouts);
    }
}
