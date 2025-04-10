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
        }else{
            return view('admin.articles.add');
        }

    }


    public function show(Article $article)
    {
        //
    }

    public function edit(int $id)
    {
        
        $tags = $this->tagRepository->index();
        $categories = $this->categoryRepository->index();
        $article = $this->articleRepository->edit($id);
        return view('admin.articles.edit')->with(['categories' => $categories, 'tags' => $tags, 'articles' => $article]);

    }

  
    public function update(ArticleRequest $request, int $id)
    {
        
        $articleIsUpdated = $this->articleRepository->update($request, $id);
    
        if ($articleIsUpdated) {
            return redirect('articles')->with('success', 'Article updated successfully!');
        }
        
    }

    public function destroy(int $id)
    {
        $this->articleRepository->delete($id);
        return redirect('articles')->with('delete', 'Article deleted successfully!');
        
    }



    

}
