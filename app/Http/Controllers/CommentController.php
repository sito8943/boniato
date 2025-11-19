<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => ['required', 'string', 'min:10', 'max:255'],
            'article_id' => ['required', 'integer', 'exists:articles,id'],
        ]);

        Comment::create($validated);

        return redirect()->back();
    }
    //
}
