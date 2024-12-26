<?php

namespace App\Http\Repository;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleRepository
{

    public function index(): object
    {

        return Article::with('category', 'tag', 'user')->get();
    }


    public function insert(ArticleRequest $request): article
    {
        $articleInfo = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('/articles_images');
            $articleInfo['image'] = $image;
        }

        return Article::create($articleInfo);
    }

    public function edit(int $id): object
    {
        return Article::where('id', $id)->first();
    }

    public function update(ArticleRequest $request, int $id): bool
    {
        $updateData = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/articles_images');
            $updateData['image'] = $image;
        }
        unset($updateData['_token'], $updateData['_method']);
        return Article::where('id', $id)->update($updateData);
    }


    public function  delete(int $id): bool
    {
        return Article::where('id', $id)->delete();
    }

    public function getArticle(): array
    {

        $lastFourArticles = Article::with('category', 'tag', 'user')
            ->latest()
            ->take(4)
            ->get();
        $firstArticle = Article::with('category', 'tag', 'user')
            ->oldest()
            ->first();
        $lastArticle = Article::with('category', 'tag', 'user')
            ->latest()
            ->first();
        $pagination = Article::with('category', 'tag', 'user')
            ->paginate(6);

        return [$lastFourArticles, $firstArticle, $lastArticle, $pagination];
    }

    public function articleGetByCategoryId($id): array
    {

        $lastFourArticlesByCategoryId = Article::with('category', 'tag', 'user')
            ->where('category_id', $id)
            ->latest()
            ->take(4)
            ->get();
        $lastArticleByCategoryId = Article::with('category', 'tag', 'user')
            ->where('category_id', $id)
            ->latest()
            ->first();
        $pagination = Article::with('category', 'tag', 'user')
            ->where('category_id', $id)
            ->paginate(6);

        return [$lastFourArticlesByCategoryId, $lastArticleByCategoryId, $pagination];
    }

    public function articleGetByTagId($id): array
    {
        $lastFourArticlesByTagId = Article::with('category', 'tag', 'user')
            ->where('tag_id', $id)
            ->latest()
            ->take(4)
            ->get();
        $lastArticleByTagId = Article::with('category', 'tag', 'user')
            ->where('tag_id', $id)
            ->latest()
            ->first();
        $pagination = Article::with('category', 'tag', 'user')
            ->where('tag_id', $id)
            ->paginate(6);

        return [$lastFourArticlesByTagId, $lastArticleByTagId, $pagination];
    }

    public function showArticleById($id): array
    {
        $articleGetById = Article::with('category', 'tag', 'user')->where('id', $id)->get();
        $getLastFourArticle = Article::with('category', 'tag', 'user')
            ->latest()
            ->take(4)
            ->get();
        $getLastArticle = Article::with('category', 'tag', 'user')
            ->latest()
            ->first();
        return [$articleGetById, $getLastFourArticle, $getLastArticle];
    }

    public function getMonthlyData(): array
    {
        $totalCount = DB::select("
            SELECT 
                (SELECT COUNT(*) FROM articles WHERE status = '1') AS publishedArticle,
                (SELECT COUNT(*) FROM articles WHERE status = '0') AS draftArticle,
                (SELECT COUNT(*) FROM categories) AS totalCategory,
                (SELECT COUNT(*) FROM tags) AS totalTag,
                (SELECT COUNT(*) FROM articles) AS totalArticles
        ");

        $lastFiveArticles = Article::orderBy('id', 'desc')->limit(5)->get();

        config()->set('database.connections.mysql.strict', false);
        DB::reconnect();
        $articleCountsByMonth = DB::select(DB::raw("SELECT MONTHNAME(created_at) as 'month', 
                                            COUNT(*) AS 'total_article' FROM `articles` 
                                            WHERE YEAR(created_at) = YEAR(now()) 
                                            GROUP BY MONTH(created_at)"));

        return ['totalCount' =>$totalCount, 'lastFiveArticles' => $lastFiveArticles, 'articleCountByMonth' => $articleCountsByMonth];
    }
}
