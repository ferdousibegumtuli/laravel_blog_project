<?php

namespace App\Http\Controllers;
use App\Models\Frontend;
use App\Http\Repository\FrontendRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public $frontendRepository = null;

    public function __construct()
    {
        $this->frontendRepository = new FrontendRepository;
    }
  
    public function index()
    {

        $articles = $this->frontendRepository->index();
        return view('welcome', compact('articles'));

    }

    
    public function viewCategoryById(int $id)
    {
        $articles = $this->frontendRepository->articleGetByCategoryId($id);
        return view('frontend.categoryPage')->with('articles', $articles);
    }


    public function viewTagById(int $id)
    {
        $articles = $this->frontendRepository->articleGetByTagId($id);
        return view('frontend.tagPage')->with('articles', $articles);
    }
    
    public function viewArticleById(int $id)
    {
        $articles = $this->frontendRepository->showArticleById($id);
        // dd($articles);
        return view('frontend.singlePage')->with('articles', $articles);
    }

   
}
