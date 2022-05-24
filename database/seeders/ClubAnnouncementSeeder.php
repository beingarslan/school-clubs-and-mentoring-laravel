<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\ClubAnnouncement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//faker
use Faker\Factory as Faker;

class ClubAnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            for ($i = 0; $i < 10; $i++) {
                ClubAnnouncement::factory()->create([
                    'content' => $faker->text,
                    'club_id'=> rand(1, 5),
                ]);
            
        }
        
        
    }
}
