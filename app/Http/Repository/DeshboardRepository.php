<?php

namespace App\Http\Repository;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

// class DeshboardRepository{

//     public function index(){


//         $countStatus1 = Article::where('status', '=', '1')->count();
//         $draftArticle = Article::where('status', '=', '0')->count();
//         $articles = Article::orderBy('id', 'desc')->limit(5)->get();
//         $totalCategory = Category::count();
//         $totalTag = Tag::count();
//     }
// };



namespace App\Http\Repository;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class DeshboardRepository
{

    public function index()
    {
        $results = DB::select("
            SELECT 
                (SELECT COUNT(*) FROM articles WHERE status = '1') AS publishedArticle,
                (SELECT COUNT(*) FROM articles WHERE status = '0') AS draftArticle,
                (SELECT COUNT(*) FROM categories) AS totalCategory,
                (SELECT COUNT(*) FROM tags) AS totalTag,
                (SELECT COUNT(*) FROM articles) AS totalArticles
        ");

        $articles = Article::orderBy('id', 'desc')->limit(5)->get();

        config()->set('database.connections.mysql.strict', false);
        DB::reconnect();
        $articleCountsByMonth = DB::select(DB::raw("SELECT MONTHNAME(created_at) as 'month', 
        COUNT(*) AS 'total_article' FROM `articles` WHERE YEAR(created_at) = YEAR(now()) GROUP BY MONTH(created_at)"));

        return [$results, $articles, $articleCountsByMonth];
    }
}


