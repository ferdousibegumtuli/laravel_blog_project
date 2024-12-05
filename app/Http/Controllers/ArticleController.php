<?php

namespace App\Http\Controllers;

use App\Http\Repository\ArticleRepository;
use App\Http\Repository\CategoryRepository;
use App\Http\Repository\TagRepository;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleRepository = null;
    private $categoryRepository = null;
    private $tagRepository = null;
    function __construct()
    {
        $this->articleRepository = new ArticleRepository;
        $this->categoryRepository = new CategoryRepository;
        $this->tagRepository = new TagRepository;
    }
   
    public function index(): View
    {
        $articles = $this->articleRepository->index();
        return view('admin.articles.index')->with('articles', $articles);
    }

    public function create(): View
    {
        $tags = $this->tagRepository->index();
        $categories = $this->categoryRepository->index();
        return view('admin.articles.add')->with(['categories' => $categories, 'tags' => $tags]);
    }


    public function store(ArticleRequest $request)
    {
        dd($request);
        // $imagePath = null;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('articles_images', 'public');
        // }
    
        // $article = new Article();
        // $article->title = $request->input('title');
        // $article->category_id = $request->input('categori');
        // $article->tag_id = $request->input('tag');
        // $article->description = $request->input('description');
        // $article->status = $request->input('status');
        // $article->image = $imagePath;
        // $article = $article->save();
    
    }














    public function show(Article $article)
    {
        //
    }

    public function edit(Article $article)
    {
        //
    }


    public function update(Request $request, Article $article)
    {
        //
    }


    public function destroy(Article $article)
    {
        //
    }
}
