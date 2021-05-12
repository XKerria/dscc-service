<?php

namespace App\Http\Requests\Manage;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|between:2,255',
            'intro' => 'nullable|string|max:1000',
            'cover' => 'nullable|url|max:1800',
            'images' => 'nullable|url|max:1800',
            'priority' => 'nullable|integer|min:0|max:9999',
            'category_id' => 'nullable|exists:categories,id'
        ];
    }
}
