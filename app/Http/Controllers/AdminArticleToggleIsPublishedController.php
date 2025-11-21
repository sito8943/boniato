<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Notifications\ArticlePublishedNotification;
use Illuminate\Http\Request;

class AdminArticleToggleIsPublishedController extends Controller
{
    public function __invoke(string $id)
    {
        $article = Article::find($id);

        $article->update([
            'is_published' => !$article->is_published,
        ]);

        if($article->is_published) {
            $admins = User::where('is_admin', true)->get();
            foreach($admins as $admin) {
                $admin->notify(new ArticlePublishedNotification($article, auth()->user()));
            }
        }

        return redirect()->back();
    }
}
