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
                $clubAnnouncement->create([
                    'content' => $faker->text,
                    'user_id'=>$faker->numberBetween(1,10),
                    'club_announcement_id'=>$clubAnnouncement->id,
                ]);
            }
        }
        
    }
}
