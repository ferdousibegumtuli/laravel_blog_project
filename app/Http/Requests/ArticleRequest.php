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

            Article::ARTICLE => 'required|string|max:255|articles,title',
            'required|string|articles,description',
            'required|exists:users,id|articles,user_id',
            'required|exists:categories,id|articles,category_id',
            'required|exists:tags,id|articles,tag_id',
            'boolean|articles,status',
            'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|articles,image'
            
            // 'title' => 'required|string|max:255',
            // 'description' => 'required|string',
            // 'user_id' => 'required|exists:users,id',
            // 'category_id' => 'required|exists:categories,id',
            // 'tag_id' => 'required|exists:tags,id',
            // 'status' => 'boolean',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
