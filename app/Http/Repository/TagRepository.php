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

    public function insert(array $tag): Tag
    {
        return Tag::create($tag);
    }

    public function edit(int $id): object
    {
        return Tag::where(Tag::ID, $id)->first();
    }

    public function update(array $updateData, int $id): bool
    {
        unset($updateData['_token'], $updateData['_method']);
        return Tag::where(Tag::ID, $id)->update($updateData);
    }

    public function delete(int $id): bool
    {
        return Tag::where(Tag::ID, $id)->delete();
    }
}
