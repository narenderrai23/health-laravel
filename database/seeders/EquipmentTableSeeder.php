<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the equipment data
        $equipment = [
            [
                'name' => 'Treadmill',
                'title' => 'Cardio Treadmill',
                'slug' => 'treadmill',
                'short_description' => 'High-quality treadmill for effective cardio workouts.',
                'description' => 'Our treadmill offers a range of speeds and inclines to tailor your cardio workouts. Built with advanced features for optimal performance and durability.',
                'icon' => 'fa fa-tachometer-alt',
                'image_path' => 'assets/images/equipment/treadmill.jpg',
            ],
            [
                'name' => 'Stationary Bike',
                'title' => 'Indoor Exercise Bike',
                'slug' => 'stationary-bike',
                'short_description' => 'Durable stationary bike for indoor cycling.',
                'description' => 'This stationary bike is perfect for indoor cycling with adjustable resistance levels and comfortable seating. Ideal for both beginners and experienced cyclists.',
                'icon' => 'fa fa-bicycle',
                'image_path' => 'assets/images/equipment/stationary-bike.jpg',
            ],
            [
                'name' => 'Elliptical Trainer',
                'title' => 'Elliptical Exercise Machine',
                'slug' => 'elliptical-trainer',
                'short_description' => 'Smooth elliptical trainer for full-body workouts.',
                'description' => 'The elliptical trainer provides a low-impact workout that engages both upper and lower body muscles. Features adjustable resistance and various workout programs.',
                'icon' => 'fa fa-random',
                'image_path' => 'assets/images/equipment/elliptical-trainer.jpg',
            ],
            [
                'name' => 'Rowing Machine',
                'title' => 'Rowing Exercise Equipment',
                'slug' => 'rowing-machine',
                'short_description' => 'Effective rowing machine for a full-body workout.',
                'description' => 'Our rowing machine offers a complete workout experience, simulating the motion of rowing for an excellent cardiovascular and strength training exercise.',
                'icon' => 'fa fa-rowing',
                'image_path' => 'assets/images/equipment/rowing-machine.jpg',
            ],
            [
                'name' => 'Free Weights',
                'title' => 'Dumbbells and Barbells',
                'slug' => 'free-weights',
                'short_description' => 'Variety of free weights for strength training.',
                'description' => 'Free weights include dumbbells and barbells for versatile strength training exercises. Available in various weights to suit different fitness levels.',
                'icon' => 'fa fa-dumbbell',
                'image_path' => 'assets/images/equipment/free-weights.jpg',
            ],
            [
                'name' => 'Kettlebells',
                'title' => 'Kettlebell Set',
                'slug' => 'kettlebells',
                'short_description' => 'Range of kettlebells for dynamic workouts.',
                'description' => 'Our kettlebell set is designed for a variety of strength and conditioning exercises. Each kettlebell is durable and available in multiple weights for diverse workouts.',
                'icon' => 'fa fa-cogs',
                'image_path' => 'assets/images/equipment/kettlebells.jpg',
            ],
        ];

        // Insert data into the equipment table
        DB::table('equipment')->insert($equipment);
    }
}
