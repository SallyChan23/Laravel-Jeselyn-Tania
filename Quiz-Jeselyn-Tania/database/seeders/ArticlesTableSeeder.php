<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Machine Learning',
            'content' => 'Machine learning is a method of data analysis 
            that automates analytical model building. It is a branch 
            of artificial intelligence based on the idea that systems 
            can learn from data, identify patterns and make decisions with 
            minimal human intervention.',
            'category_id' => 1, 
            'image' => 'images/',
        ]);
    }
}
