<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Create 10 sample packages
        foreach (range(1, 10) as $index) {
            DB::table('packages')->insert([
                'name' => $faker->word . ' Holiday',  // Example package name
                'description' => $faker->paragraph,  // Random description
                'price' => $faker->randomFloat(2, 100, 5000),  // Random price between 100 and 5000
                'destination' => $faker->city,  // Random city name
                'duration' => $faker->numberBetween(3, 14),  // Duration between 3 and 14 days
                'image' => $faker->imageUrl(),  // Random image URL
                'is_active' => $faker->boolean,  // Random boolean for active status
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
