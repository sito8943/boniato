<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index()
    {

        // Load data
        $articles = \App\Models\Article::with('author','categories', 'media')->paginate(10);
        // in case of category filtering: see whereHas('categories', function($query) use ($category) { $query->where('id', $category->id); })->get();)

        // Return view with data
        return view('articles.index', compact('articles'));

    }

    function show(int $id)
    {
        $article = Article::find($id);

        return view('articles.show', compact('article'));
    }
}
