<?php

namespace App\Http\Repository;

use App\Models\Article;

class ArticleRepository
{

    public function index(): object
    {
        return Article::get();
    }
}
