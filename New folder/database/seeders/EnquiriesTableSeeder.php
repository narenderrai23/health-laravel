<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnquiriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enquiries = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '+1234567890',
                'subject' => 'Request for Information',
                'message' => 'I would like to know more about your services and pricing.',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '+0987654321',
                'subject' => 'Feedback',
                'message' => 'I had a great experience with your service. Keep up the good work!',
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'phone' => '+1122334455',
                'subject' => 'Appointment Inquiry',
                'message' => 'I would like to schedule an appointment for next week.',
            ],
        ];

        // Insert data into the enquiries table
        DB::table('enquiries')->insert($enquiries);
    }
}
