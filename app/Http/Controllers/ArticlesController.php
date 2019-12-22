<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function showArticles()
    {
        $articles = Article::paginate(10);

        return view('articles.showArticles', compact('articles'));
    }
}
