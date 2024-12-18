<?php

namespace App\Http\Repository;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;

class FrontendRepository
{
    public function index()
    {
        
        $lastFiveArticles = Article::with('category', 'tag', 'user')
        ->latest() 
        ->take(4)
        ->get();
        $firstFiveArticles = Article::with('category', 'tag', 'user')
        ->oldest() 
        ->take(6)
        ->get();
        $firstArticle = Article::with('category', 'tag', 'user')
        ->oldest() 
        ->first(); 
            
        return [$lastFiveArticles, $firstFiveArticles, $firstArticle];
    }
}
