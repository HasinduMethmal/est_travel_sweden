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

        // Generate 10 dummy guiders
        foreach (range(1, 20) as $index) {
            Guider::create([
                'user_id' => null, // You can assign a valid user_id if you want to link a user
                'name' => $faker->name, // Random name
                'email' => $faker->unique()->safeEmail, // Random unique email
                'status' => $faker->randomElement(['Active', 'Inactive']), // Random status
            ]);
        }
    }
}
