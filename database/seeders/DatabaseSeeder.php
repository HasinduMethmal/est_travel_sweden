<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GuiderSeeder; // Ensure to import the GuiderSeeder
use Database\Seeders\DestinationsTableSeeder;
use Database\Seeders\ServicesTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DestinationsTableSeeder::class);
        // Call the GuiderSeeder to create Guiders and link them to users
        $this->call(GuiderSeeder::class);
        $this->call(PackagesSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(GallerySeeder::class);
        // You can add additional seeders here if needed, for example:
        // $this->call(OtherSeeder::class);
    }
}
