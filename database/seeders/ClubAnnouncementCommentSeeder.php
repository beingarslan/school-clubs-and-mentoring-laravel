<?php

namespace Database\Seeders;

use App\Models\ClubAnnouncement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//faker
use Faker\Factory as Faker;

class ClubAnnouncementCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $clubAnnouncements = ClubAnnouncement::all();
        foreach ($clubAnnouncements as $clubAnnouncement) {
            for ($i = 0; $i < 10; $i++) {
                $clubAnnouncement->comments()->create([
                    'user_id' => rand(1, 6),
                    'content' => $faker->text(200),
                ]);
            }
        }
        
    }
}
