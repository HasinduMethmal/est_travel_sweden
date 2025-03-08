<?php

namespace Database\Seeders;

use App\Models\Guider;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instantiate Faker
        $faker = Faker::create();

        // Generate 20 dummy guiders
        foreach (range(1, 20) as $index) {
            Guider::create([
                'user_id' => null, // You can assign a valid user_id if you want to link a user
                'name' => $faker->name, // Random name
                'email' => $faker->unique()->safeEmail, // Random unique email
                'image' => $faker->imageUrl(),  // Random image URL
                'phone' => $faker->phoneNumber, // Random phone number
                'bio' => $faker->paragraph, // Random bio (paragraph)
                'is_active' => $faker->boolean,  // Random boolean for active status
            ]);
        }
    }
}
