<?php

namespace Database\Seeders;

use App\Models\Mentoring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//faker
use Faker\Factory as Faker;
class MentorshipCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $mentorings = Mentoring::all();
        foreach ($mentorings as $mentoring) {
            for ($i = 0; $i < 10; $i++) {
                $mentoring->comments()->create([
                    'user_id' => rand(1, 6),
                    'content' => $faker->text(200),
                ]);
            }
        }


    }
}
