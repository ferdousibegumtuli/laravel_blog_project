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
            'email' => 'required|unique:users,email,' . $this->route('user'),
            'password' => 'required_with:confirm_password|min:8|same:confirm_password',
            'confirm_password' => 'min:8',

        ];
    }
}

