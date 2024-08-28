<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Physiotherapy',
                'title' => 'Rehabilitation & Therapy',
                'slug' => 'physiotherapy',
                'short_description' => 'Expert physiotherapy services for recovery and pain management.',
                'description' => 'Our physiotherapy services are designed to help with injury recovery, pain relief, and overall physical rehabilitation. We offer personalized treatment plans to meet your specific needs.',
                'icon' => 'flaticon-rehabilitation',
                'image_path' => 'assets/images/services/physiotherapy.jpg',
            ],
            [
                'name' => 'Chiropractic Care',
                'title' => 'Spinal Health & Wellness',
                'slug' => 'chiropractic-care',
                'short_description' => 'Comprehensive chiropractic care for spinal alignment and wellness.',
                'description' => 'Chiropractic care focuses on diagnosing and treating spinal disorders and musculoskeletal issues. Our chiropractors use various techniques to improve alignment and overall health.',
                'icon' => 'flaticon-physiotherapy',
                'image_path' => 'assets/images/services/chiropractic-care.jpg',
            ],
            [
                'name' => 'Naturopathy',
                'title' => 'Natural Healing & Wellness',
                'slug' => 'naturopathy',
                'short_description' => 'Holistic naturopathy treatments for natural healing.',
                'description' => 'Naturopathy uses natural remedies and therapies to promote self-healing and overall wellness. We offer various treatments including herbal medicine, nutrition counseling, and more.',
                'icon' => 'flaticon-aromatherapy-spa-treatment',
                'image_path' => 'assets/images/services/naturopathy.jpg',
            ],
            [
                'name' => 'Massage Therapy',
                'title' => 'Relaxation & Relief',
                'slug' => 'massage-therapy',
                'short_description' => 'Relaxing and therapeutic massage treatments.',
                'description' => 'Our massage therapy services are designed to relax your muscles, alleviate stress, and promote overall well-being. Choose from various types of massages to suit your needs.',
                'icon' => 'flaticon-rehabilitation-1',
                'image_path' => 'assets/images/services/massage-therapy.jpg',
            ],
            [
                'name' => 'Acupuncture',
                'title' => 'Ancient Chinese Medicine',
                'slug' => 'acupuncture',
                'short_description' => 'Traditional acupuncture treatments for various health issues.',
                'description' => 'Acupuncture is a traditional Chinese medicine technique that involves inserting thin needles into specific points on the body to balance energy flow and promote healing.',
                'icon' => 'flaticon-spa-1',
                'image_path' => 'assets/images/services/acupuncture.jpg',
            ],
            [
                'name' => 'Chiropody',
                'title' => 'Foot Health & Care',
                'slug' => 'chiropody',
                'short_description' => 'Expert chiropody services for foot health.',
                'description' => 'Chiropody focuses on the diagnosis and treatment of foot and lower limb conditions. Our services include routine foot care, treatment of injuries, and advice on foot health.',
                'icon' => 'flaticon-accident',
                'image_path' => 'assets/images/services/chiropody.jpg',
            ],
        ];

        // Insert data into the services table
        DB::table('services')->insert($services);
    }
}
