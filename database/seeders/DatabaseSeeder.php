<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // CreateUsersSeeder::class,
            // MissionVisionsTableSeeder::class,
            // SlidersTableSeeder::class,
            // ServicesTableSeeder::class,
            // EquipmentTableSeeder::class,
            // ContactsTableSeeder::class,
            // EnquiriesTableSeeder::class,
            // AboutsTableSeeder::class,
            // FunFactsTableSeeder::class,
            InsuranceSeeder::class

        ]);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
