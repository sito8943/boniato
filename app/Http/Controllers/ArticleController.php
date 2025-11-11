<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index()
    {
        // Load data

        // Return view with data
        return view('articles.index');

    }
}
