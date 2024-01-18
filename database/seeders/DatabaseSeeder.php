<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Facility;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Record::factory(500)->create();

        Facility::factory(100)->create();

        Student::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'Rein Cruz',
            'email' => 'antikabaklaan@gmail.com',
            'password' => 'bading'
        ]);
    }
}
