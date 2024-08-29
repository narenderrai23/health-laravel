<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MissionVisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $missionvisions = [
            [
                'section' => 'Our Mission',
                'icon' => 'flaticon-vision',
                'content' => json_encode([
                    'title' => 'Our core and additional services',
                    'description' => 'Our Vision is to promote a healthy lifestyle. To be a global health care leader by advancing the science and practice of massage therapy. In supporting our members and serving our stakeholders.',
                    'services' => ['Physiotherapy', 'Chiropractic Care', 'Naturopathy', 'Massage Therapy', 'Acupuncture', 'Chiropody'],
                    'image_path' => 'path/to/image1.jpg',
                ]),
            ],
            [
                'section' => 'Our Vision & Values',
                'icon' => 'flaticon-eye',
                'content' => json_encode([
                    'title' => 'Our core and additional services',
                    'description' => 'Our Vision is to promote a healthy lifestyle. To be a global health care leader by advancing the science and practice of massage therapy. In supporting our members and serving our stakeholders.',
                    'services' => ['Physiotherapy', 'Chiropractic Care', 'Naturopathy', 'Massage Therapy', 'Acupuncture', 'Chiropody'],
                    'image_path' => 'path/to/image2.jpg',
                ]),
            ],
            [
                'section' => 'Our Quality',
                'icon' => 'flaticon-award',
                'content' => json_encode([
                    'title' => 'Our core and additional services',
                    'description' => 'Our Vision is to promote a healthy lifestyle. To be a global health care leader by advancing the science and practice of massage therapy. In supporting our members and serving our stakeholders.',
                    'services' => ['Physiotherapy', 'Chiropractic Care', 'Naturopathy', 'Massage Therapy', 'Acupuncture', 'Chiropody'],
                    'image_path' => 'path/to/image3.jpg',
                ]),
            ],
        ];

        DB::table('mission_visions')->insert($missionvisions);
    }
}