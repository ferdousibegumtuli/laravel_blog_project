<?php

namespace App\Http\Controllers;

use App\Http\Repository\DeshboardRepository;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $deshboardRepository = null;

    public function __construct()
    {
        $this->middleware('auth');
        $this->deshboardRepository = new DeshboardRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $article =$this->deshboardRepository->index();
        return view('admin.deshboard')->with('article', $article);

        // $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))

        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy(DB::raw("Month(created_at)"))
        //     ->pluck('count', 'month_name');

        // $labels = $users->keys();

        // $data = $users->values();

        // return view('chart', compact('labels', 'data'));




        // $publishedArticle = Article::where('status', '=', '1')->count()->where('status', '=', '0')->count();
        // $draftArticle = Article::where('status', '=', '0')->count();
        // $articles = Article::orderBy('id', 'desc')->limit(5)->get();
        // $totalCategory = Category::count();
        // $totalTag = Tag::count();

        // return view('admin.deshboard')->with([
        //         'totalCategory' => $totalCategory,
        //         'totalTag' => $totalTag,
        //         'publishedArticle' => $publishedArticle,
        //         'draftArticle' => $draftArticle,
        //         'articles' => $articles,

        //     ]);
    }
}
