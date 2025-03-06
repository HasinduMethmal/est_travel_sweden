<?php

namespace Database\Seeders;

use App\Models\User; // Import the User model
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // To hash passwords
use Faker\Factory as Faker; // To generate fake data

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use Faker to create fake data
        $faker = Faker::create();

        // Create 10 users for testing purposes
        foreach (range(1, 10) as $index) {
            User::create([
                'name' => $faker->name, // Fake name
                'email' => $faker->unique()->safeEmail, // Unique email
                'password' => Hash::make('password'), // Hash a default password
            ]);
        }
    }
}
