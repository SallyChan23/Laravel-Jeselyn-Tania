<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
    $categories = Category::whereIn('name', ['Data Science', 'Network Security'])->get();
    return view('your_view', compact('categories'));
    }

    public function show($slug)
    {
        // Retrieve the category with articles
        $category = Category::where('slug', $slug)->with('articles')->firstOrFail();
        return view('category.show', compact('category'));
    }
}
