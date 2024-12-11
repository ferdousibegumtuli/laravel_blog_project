<?php

namespace App\Http\Repository;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{

    public function index(): Collection
    {
        return Category::get();
    }

    public function insert(array $categoryInfo): category
    {
        return Category::create($categoryInfo);
    }

    public function edit(int $id): object
    {
        return Category::where(Category::ID, $id)->first();
    }

    public function update(array $updateData, int $id): bool
    {
        unset($updateData['_token'], $updateData['_method']);
        return Category::where(Category::ID, $id)->update($updateData);
    }

    public function delete(int $id): bool
    {
        return Category::where(Category::ID, $id)->delete();
    }

    public function findCategoriByCategoryId(int $id): Category
    {
        return Category::find($id);
    }

    public function countCategory()
    {
        $categories = Category::get();
        return $categories->count();
        
    }
}
