<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Exercise::create([

        ]);

        Exercise::create([

        ]);

        $this->call(ExerciseSeeder::class);

        // Add more Exercise records as needed
    }
}
