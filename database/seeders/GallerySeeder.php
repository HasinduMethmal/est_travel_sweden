<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        // Loop to create multiple gallery entries
        foreach (range(1, 10) as $index) { // Adjust the number 10 to the number of records you want to insert
            DB::table('galleries')->insert([
                'image' => $faker->imageUrl(800, 600, 'cats', true, 'Faker'), // Random image URL (you can replace this with your own image paths if needed)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
