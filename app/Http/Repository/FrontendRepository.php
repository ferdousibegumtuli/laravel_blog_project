<?php

namespace App\Http\Repository;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class FrontendRepository
{
    public function index(): array
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
        $lastArticle = Article::with('category', 'tag', 'user')
        ->latest() 
        ->first(); 
        $categories = Category::get();
        $tags = Tag::get();
            
        return [$categories, $tags, $lastFiveArticles, $firstFiveArticles, $firstArticle, $lastArticle];
    }

    public function articleGetByCategoryId($id): array
    {
        $categories = Category::get();
        $tags = Tag::get();
        $articleByCategoryId = Article::with('category', 'tag', 'user')->where('category_id', $id)->get();
        $lastFourArticlesByCategoryId = Article::with('category', 'tag', 'user')
        ->where('category_id', $id)
        ->latest() 
        ->take(4)
        ->get();
        $lastArticleByCategoryId = Article::with('category', 'tag', 'user')
        ->where('category_id', $id)
        ->latest() 
        ->first(); 
        $getCategoryByCategoryId = Category::find($id);

        return [$categories, $tags, $articleByCategoryId, $lastFourArticlesByCategoryId, $lastArticleByCategoryId, $getCategoryByCategoryId];
    }

    public function articleGetByTagId($id): array
    {
        $categories = Category::get();
        $tags = Tag::get();
        $articleByTagId = Article::with('category', 'tag', 'user')->where('tag_id', $id)->get();
        $lastFiveArticlesByTagId = Article::with('category', 'tag', 'user')
        ->where('tag_id', $id)
        ->latest() 
        ->take(4)
        ->get();
        $lastArticleByTagId = Article::with('category', 'tag', 'user')
        ->where('tag_id', $id)
        ->latest() 
        ->first();
        $getTagByTagId = Tag::find($id); 
        return [$categories, $tags, $articleByTagId, $lastFiveArticlesByTagId, $lastArticleByTagId, $getTagByTagId];
    }

    public function showArticleById($id)
    {
        $categories = Category::get();
        $tags = Tag::get();
        $articleGetById = Article::with('category', 'tag', 'user')->where('id', $id)->get();
        $getLastFiveArticle = Article::with('category', 'tag', 'user')
        ->latest() 
        ->take(4)
        ->get();
        $getLastArticle = Article::with('category', 'tag', 'user')
        ->where('id', $id)
        ->latest() 
        ->first(); 
        return [$categories, $tags, $articleGetById, $getLastFiveArticle, $getLastArticle];
        
    }


}
