<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => ['required'],
            'user_sponsor' => ['nullable', 'exists:users,user_sponsor'],
            'password' => ['required']
        ];
    }
}