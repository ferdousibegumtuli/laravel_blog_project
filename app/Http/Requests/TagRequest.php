<?php

namespace App\Http\Requests;

use App\Models\Tag;
use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            Tag::TAG => 'required|max:100|string|unique:tags,tag,' . $this->route('tag'),
            
        ];
    }
}
