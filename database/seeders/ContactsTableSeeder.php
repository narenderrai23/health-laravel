<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'email' => 'contact@company.com',
                'phone' => '+1234567890',
                'location' => '123 Main Street, Hometown, Country',
            ],
        ];

        // Insert data into the contacts table
        DB::table('contacts')->insert($contacts);
    }
}
