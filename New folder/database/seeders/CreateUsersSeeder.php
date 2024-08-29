<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'type' => 1,
                'password' => bcrypt('Pa$$w0rd!'),
            ],
            [
                'name' => 'Patient',
                'email' => 'patient@gmail.com',
                'type' => 2,
                'password' => bcrypt('Pa$$w0rd!'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
