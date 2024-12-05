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

    public function insert(array $categoryInfo): bool
    {
        unset($categoryInfo['_token']);
        return Category::insert($categoryInfo);
    }

    public function edit(int $id): object
    {
        return Category::where('id', $id)->first();
    }

    public function update(array $updateData, int $id): bool
    {
        unset($updateData['_token'], $updateData['_method']);
        return Category::where('id', $id)->update($updateData);
    }

    public function delete(int $id): bool
    {
        return Category::where('id', $id)->delete();
    }
}
