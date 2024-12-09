<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $publishedArticle = Article::where('status', '=', '1')->count();
        $draftArticle = Article::where('status', '=', '0')->count();
        $totalCategory = Category::count();
        $totalTag = Tag::count();
        return view('admin.deshboard')->with
        (['totalCategory' => $totalCategory, 'totalTag' => $totalTag, 'publishedArticle' => $publishedArticle, 'draftArticle' => $draftArticle]);
    }

}
