<?php

namespace App\Http\Requests\Manage;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'username' => 'required|string|alpha_num|between:4,32|unique:users',
        ];
    }
}
