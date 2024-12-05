<?php

namespace App\Http\Repository;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class TagRepository
{
    public function index(): Collection
    {
        return Tag::get();
    }

    public function insert(array $tagInfo): bool
    {
        unset($tagInfo['_token']);
        return Tag::insert($tagInfo);
    }

    public function edit(int $id): object
    {
        return Tag::where('id', $id)->first();
    }

    public function update(array $updateData, int $id): bool
    {
        unset($updateData['_token'], $updateData['_method']);
        return Tag::where('id', $id)->update($updateData);
    }

    public function delete(int $id): bool
    {
        return Tag::where('id', $id)->delete();
    }
}
