<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph(5),
                'published_date' => $faker->date,
                'writer_id' => $faker->numberBetween(1, 10),
                'category_id' => $faker->numberBetween(1, 2), // Assuming you have 2 categories
            ]);
        }
    }
}
