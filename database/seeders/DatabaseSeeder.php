<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\HeroPropertie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

     $this->call([
         AboutSeeder::class,
         ContactSeeder::class,
         EducationSeeder::class,
         ExperienceSeeder::class,
         HeroPropertieSeeder::class,
         LanguageSeeder::class,
     ]);
    }
}
