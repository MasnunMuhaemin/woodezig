<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('images')
            ->latest()
            ->paginate(12);
            
        return view('pages.article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::with('images')
            ->where('slug', $slug)
            ->firstOrFail();
            
        // Get related articles (random 3 except current)
        $relatedArticles = Article::where('id', '!=', $article->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
            
        return view('pages.article.show', compact('article', 'relatedArticles'));
    }
}
