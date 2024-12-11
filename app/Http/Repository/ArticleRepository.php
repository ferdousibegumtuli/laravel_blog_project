<?php

namespace App\Http\Repository;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleRepository
{

    public function index(): object
    {

        return Article::with('category', 'tag', 'user')->get();
       

    }


    public function insert(ArticleRequest $request): article
    {
        $articleInfo = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/articles_images');
            $articleInfo['image'] = $image; 
        }

            return Article::create($articleInfo);
        
    }

    public function edit(int $id): object
    {
        return Article::where('id', $id)->first();
    }

    public function update(ArticleRequest $request, int $id): bool
    {
        $updateData = $request->all();
    
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/articles_images');
            $updateData['image'] = $image;
        }
        unset($updateData['_token'], $updateData['_method']);
        return Article::where('id', $id)->update($updateData);
    }


    public function  delete(int $id): bool
    {
        return Article::where('id', $id)->delete();
    }
}
