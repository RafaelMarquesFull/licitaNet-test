<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
            CountrySeeder::class,
            RegionsSeeder::class,
            StatesSeeder::class,
            CitiesSeeder::class,
            RolesSeeder::class,
            BrandsSeeder::class,
            CategoriesSeeder::class,
            UsersSeeder::class,
        ]);

        
    }
}
