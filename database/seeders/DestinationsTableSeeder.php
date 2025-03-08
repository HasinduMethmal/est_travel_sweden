<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a Faker instance
        $faker = Faker::create();

        // Insert sample data into the destinations table
        foreach (range(1, 10) as $index) {
            DB::table('destinations')->insert([
                'name' => $faker->city, // Random city name
                'description' => $faker->paragraph, // Random paragraph as description
                'price' => $faker->randomFloat(2, 100, 10000), // Random price between 100 and 10000
                'image' => $faker->imageUrl(640, 480, 'travel'), // Random image URL
                'is_active' => $faker->boolean(80), // 80% chance to be true (active), 20% chance to be false (inactive)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
