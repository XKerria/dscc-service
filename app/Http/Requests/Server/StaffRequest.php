<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:64',
            'avatar_url' => 'required|url|max:1024',
            'type' => 'required|string',
            'gender' => 'nullable|integer|between:0,2',
            'remark' => 'nullable|string|max:1024'
        ];
    }
}
