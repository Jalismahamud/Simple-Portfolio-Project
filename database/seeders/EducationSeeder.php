<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::insert([
            'duration' => '2',
            'institutionName' => 'Shahid Smrity Degree Colleage',
            'field' => 'HSC',
            'details'=>'I have been passed my Collage life in this instutation..This is such a great time that was ...!'

        ]);
    }
}
