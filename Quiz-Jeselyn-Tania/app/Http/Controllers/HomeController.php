<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(5)->get();
        return view('home.index', compact('articles'));

        $categories = Category::whereIn('name', ['Data Science', 'Network Security'])->get();
        return view('home.index', compact('categories'));
    }
}
