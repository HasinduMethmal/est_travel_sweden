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
        // Instantiate Faker for generating random data
        $faker = Faker::create();

        // Insert dummy data for services
        DB::table('services')->insert([
            [
                'name' => 'Guided City Tour',
                'category' => 'Tour Guide',
                'price' => 100.00,
                'description' => $faker->paragraph,
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Airport Pickup',
                'category' => 'Transportation',
                'price' => 50.00,
                'description' => $faker->paragraph,
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luxury Resort Stay',
                'category' => 'Accommodation',
                'price' => 500.00,
                'description' => $faker->paragraph,
                'status' => 'Inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Helicopter Tour',
                'category' => 'Adventure',
                'price' => 800.00,
                'description' => $faker->paragraph,
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Spa and Wellness',
                'category' => 'Relaxation',
                'price' => 150.00,
                'description' => $faker->paragraph,
                'status' => 'Inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
