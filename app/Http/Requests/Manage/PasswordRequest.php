<?php

namespace App\Http\Requests\Manage;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'original' => 'required|string',
            'password' => 'required|string|between:6,32',
        ];
    }
}
