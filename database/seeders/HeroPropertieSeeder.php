<?php

namespace Database\Seeders;

use App\Models\HeroPropertie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroPropertieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroPropertie::insert([
            'keyLine' => 'Web Developer',
            'title' => 'Web Developer',
            'shortTitle' => 'web',
            'image' => null
        ]);
    }
}
