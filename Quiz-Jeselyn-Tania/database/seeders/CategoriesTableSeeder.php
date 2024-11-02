<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Data Science', 'description' => 'Topics related to data science'],
            ['name' => 'Network Security', 'description' => 'Topics related to network security'],
            // Add any additional categories if needed
        ]);
    }
}
