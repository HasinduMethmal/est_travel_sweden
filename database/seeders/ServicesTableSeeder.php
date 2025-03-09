<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Insert 10 fake services
        foreach (range(1, 10) as $index) {
            DB::table('services')->insert([
                'name' => $faker->word, // Generate random word for the service name
                'category' => $faker->word, // Generate random category
                'price' => $faker->randomFloat(2, 10, 500), // Random price between 10 and 500
                'description' => $faker->paragraph, // Generate random paragraph for description
                'image' => $faker->imageUrl(640, 480, 'travel'), // Random image URL
                'is_active' => $faker->boolean, // Random boolean for active status
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
