<?php

namespace App\Http\Controllers;

use App\Http\Repository\ArticleRepository;
use App\Http\Repository\CategoryRepository;
use App\Http\Repository\TagRepository;

class FrontendController extends Controller
{
    public $articleRepository = null;
    public $categoryRepository = null;
    public $tagRepository = null;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository;
        $this->categoryRepository = new CategoryRepository;
        $this->tagRepository = new TagRepository;
    }
  
    public function index()
    {

        $articles = $this->articleRepository->getArticle();
        $categories = $this->categoryRepository->index();
        $tags = $this->tagRepository->index();
        
        return view('welcome', compact('articles', 'categories', 'tags'));

    }

    
    public function viewCategoryById(int $id)
    {
        
        $articles = $this->articleRepository->articleGetByCategoryId($id);
        $categories = $this->categoryRepository->index();
        $tags = $this->tagRepository->index();
        $categoryByCategoryId = $this->categoryRepository->findCategoriByCategoryId($id);

        return view('frontend.categoryPage', compact('articles', 'categories', 'tags', 'categoryByCategoryId'));
    }


    public function viewTagById(int $id)
    {
        $articles = $this->articleRepository->articleGetByTagId($id);
        $categories = $this->categoryRepository->index();
        $tags = $this->tagRepository->index();
        $getTagByTagId = $this->tagRepository->findTagByTagId($id);

        return view('frontend.tagPage', compact('articles', 'categories', 'tags', 'getTagByTagId'));
    }
    
    public function viewArticleById(int $id)
    {
        $articles = $this->articleRepository->showArticleById($id);
        $categories = $this->categoryRepository->index();
        // dd($categories);
        $tags = $this->tagRepository->index();

        return view('frontend.singlePage', compact('articles', 'categories', 'tags'));
    }

   
}
