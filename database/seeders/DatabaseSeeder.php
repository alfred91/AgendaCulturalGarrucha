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
            CompaniesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            EventsTableSeeder::class,
            ExperiencesTableSeeder::class,
            RegistrationsTableSeeder::class
        ]);
    }
}
