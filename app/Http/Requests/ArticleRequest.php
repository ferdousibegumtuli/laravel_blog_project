<?php

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
            'status' => 'boolean',
            'image' => 'nullable|file|mimes:jpeg,png,jpg|max:5120',

        ];
    }
}
