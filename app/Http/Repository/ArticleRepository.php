<?php

namespace App\Http\Repository;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleRepository
{

    public function index(): object
    {
        return Article::get();
    }

    public function insert(ArticleRequest $request): bool
    {
        $articleInfo = $request->all();
        $image = $request->file('image')->store('public/articles_images');
        if (isset($image)) {
            unset($articleInfo['_token']);
            return Article::insert($articleInfo);
        }
        
    }
}
