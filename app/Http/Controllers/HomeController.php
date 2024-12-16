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
        $labels = $article[2][0]->month;
        $data = $article[2][0]->total_article;
        return view('admin.deshboard')->with(['article'=>$article, 'labels'=>$labels, 'data'=>$data] );
        // dd($article);


    }
}
