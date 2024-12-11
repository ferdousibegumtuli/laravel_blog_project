<?php 
namespace App\Http\Repository;

use App\Models\Article;

class DeshboardRepository{

    public function index(){

        $article = Article::where('status', '=', '1')->count()
        ->where('status', '=', '0')->count()
        ->orderBy('id', 'desc')->limit(5)->get();
        return $article;
        
        // $draftArticle = Article::where('status', '=', '0')->count();
        // $articles = Article::orderBy('id', 'desc')->limit(5)->get();
        // $totalCategory = Category::count();
        // $totalTag = Tag::count();
    }
};