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
        
        $articleIsSave = $this->articleRepository->insert($request);
        if($articleIsSave){
            return redirect('articles')->with('success', 'Article added successfully!');
        }

    
    }


    public function show(Article $article)
    {
        //
    }

    public function edit(int $id)
    {
        
        $article = $this->articleRepository->edit($id);
        return response()->json($article);
        
    }

  
    public function update(ArticleRequest $request, int $id)
    {
        return view('admin.articles.edit');
        // $updateData = $request->all();
        // $this->categoryRepository->update($updateData, $id);
        // return redirect('categories')->with('success', 'Category update successfully!');
    }

    public function destroy(int $id)
    {
        $this->articleRepository->delete($id);
        return redirect('articles')->with('success', 'Article deleted successfully!');
        
    }
}
