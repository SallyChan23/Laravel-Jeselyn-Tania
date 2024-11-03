<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Data Science',
            'description' => 'Topics related to data science',
            'slug' => Str::slug('Data Science'), 
        ]);

        Category::create([
            'name' => 'Network Security',
            'description' => 'Topics related to network security',
            'slug' => Str::slug('Network Security'),
        ]);
    }
}
