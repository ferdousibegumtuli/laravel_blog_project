<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [

            'name' => 'required|string|max:255|unique:users,name,' . $this->route('user'),
            'email' => 'required|unique:users,email',
            'password' => 'required_with:password_confirm|min:8',
            'password_confirm' => 'min:8'
        
        ];
    }
}
