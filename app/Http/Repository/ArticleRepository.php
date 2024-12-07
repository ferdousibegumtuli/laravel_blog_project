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

    public function insert(ArticleRequest $request): bool
    {
        $articleInfo = $request->all();
        $image = $request->file('image')->store('public/articles_images');
        if (isset($image)) {
            unset($articleInfo['_token']);
            return Article::insert($articleInfo);
        }
        
    }

    public function edit(int $id): object
    {
        return Article::where('id', $id)->first();
    }

    // public function update(array $updateData, int $id): bool
    // {
    //     unset($updateData['_token'], $updateData['_method']);
    //     return Article::where('id', $id)->update($updateData);
    // }


    public function  delete(int $id): bool
    {
        return Article::where('id', $id)->delete();
    }
}
