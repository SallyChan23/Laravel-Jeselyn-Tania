<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;


class CategoryController extends Controller
{
    public function index()
    {
    $categories = Category::whereIn('name', ['Data Science', 'Network Security'])->get();
    return view('your_view', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles; 

        return view('category.show', compact('category', 'articles'));
    }

    // public function dataScience()
    // {
    // $category = Category::where('name', 'Data Science')->firstOrFail();
    // $articles = $category->articles()->where('category_id', $category->id)->get(); // Ensure only articles for Data Science are fetched
    // return view('category.show', compact('category', 'articles'));
    // }

    // public function networkSecurity()
    // {
    // $category = Category::where('name', 'Network Security')->firstOrFail();
    // $articles = $category->articles()->where('category_id', $category->id)->get(); // Ensure only articles for Network Security are fetched
    // return view('category.show', compact('category', 'articles'));
    // }
}

