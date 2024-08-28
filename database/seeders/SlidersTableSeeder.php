<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the sliders data
        $sliders = [
            [
                'image_path' => 'assets/images/heroslider/heroslider-image-1.jpg',
                'title' => 'Discover Your Wellness',
                'description' => 'Massage therapy can help alleviate chronic pain, enhance your overall health, and promote relaxation. Experience our transformative treatments today.',
                'link' => 'about-us.html',
            ],
            [
                'image_path' => 'assets/images/heroslider/heroslider-image-2.jpg',
                'title' => 'Rejuvenate Your Body',
                'description' => 'Our services provide effective relief from muscle tension and stress, leaving you feeling refreshed and revitalized. Visit us to see how we can help you.',
                'link' => 'about-us.html',
            ],
            [
                'image_path' => 'assets/images/heroslider/heroslider-image-3.jpg',
                'title' => 'Holistic Health Solutions',
                'description' => 'Explore our comprehensive wellness solutions designed to improve your quality of life. From therapeutic massages to relaxation techniques, we’ve got you covered.',
                'link' => 'about-us.html',
            ],
        ];

        // Insert data into the sliders table
        DB::table('sliders')->insert($sliders);
    }
}
