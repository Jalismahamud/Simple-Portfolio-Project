<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            'fullName' => 'Jalis Mahamud',
            'email' => 'jalismahamud@gmail.com',
            'phone' => '01785927491',
            'message' => 'Hello there , i am jalis mahamud. I love php & Laravel..'
        ]);
    }
}
