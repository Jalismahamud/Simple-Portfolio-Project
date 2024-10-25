<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::insert([
            'duration' => '2',
            'title' => 'php',
            'designation' => 'problem solving',
            'details' => 'i have been exprienced with programming problem solving.'
        ]);
    }
}
