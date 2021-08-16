<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'phone' => 'required|string|exists:admins,phone',
            'password' => 'required|string'
        ];
    }
}
