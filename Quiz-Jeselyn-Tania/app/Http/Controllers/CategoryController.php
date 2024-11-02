<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereIn('name', ['Data Science', 'Network Security'])->get();

        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        // Retrieve the category with articles
        $category = Category::with('articles')->findOrFail($id);

        return view('category.show', compact('category'));
    }
}
