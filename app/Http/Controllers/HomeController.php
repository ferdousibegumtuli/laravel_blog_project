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

        $article =$this->articleRepository->getMonthlyData();
        $labels = $article[2];
        $data = $article[3];

        if(!empty($article)){

            return view('admin.deshboard')->with(['article'=>$article, 'labels'=>$labels, 'data'=>$data] );
        }

        return view('admin.deshboard');
    }
}
