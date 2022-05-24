<?php

namespace Database\Seeders;

use App\Models\Club;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $clubs = [
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
            [
                'name' => $faker->company,
                'description' => $faker->text,
            ],
        ];

        Club::insert($clubs);
    }
}
