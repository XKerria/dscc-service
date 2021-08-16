<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'nullable|url|max:1800',
            'title' => 'required|min:2|max:255',
            'preface' => 'nullable|min:0|max:1000',
            'text' => 'nullable',
            'html' => 'nullable',
            'priority' => 'required|min:0|max:9999',
            'category_id' => 'nullable|exists:categories,id'
        ];
    }
}
