<?php

namespace App\Http\Controllers;

use App\Http\Repository\ArticleRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $articleRepository = null;

    public function __construct()
    {
        $this->middleware('auth');
        $this->articleRepository = new ArticleRepository;
    }

   
    public function index(): view
    {

        $article = $this->articleRepository->getMonthlyData();
        $lastFiveArticles = $article['lastFiveArticles'];
        $months = [];
        $counts = [];
        foreach ($article['articleCountByMonth'] as $articleCountByMonth) {
            $months[] = $articleCountByMonth->month;
            $counts[] = $articleCountByMonth->total_article;
        }
        return view('admin.deshboard')->with(['article'=>$article, 'months'=>$months, 'counts'=>$counts, 'lastFiveArticles'=>$lastFiveArticles] );

    }
}
