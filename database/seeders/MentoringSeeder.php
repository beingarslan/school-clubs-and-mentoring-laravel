<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// faker
use Faker\Factory as Faker;

class MentoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            $mentoring = new \App\Models\Mentoring();
            $mentoring->tital = $faker->sentence(3);
            $mentoring->description = $faker->paragraph(3);
            $mentoring->save();
        }
        
    }
}
