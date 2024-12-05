<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            Category::CATEGORY => 'required|max:100|string|unique:categories,category,' . $this->route('category'),
            //$this->route('category') = id;
        ];
    }
}
