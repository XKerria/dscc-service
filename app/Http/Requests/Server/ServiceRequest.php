<?php

namespace App\Http\Requests\Server;

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
            'category_id' => 'required|exists:categories,id',
            'intro' => 'nullable|string|max:1000',
            'tip' => 'nullable|string|max:255',
            'content' => 'nullable|string|max:65535',
            'priority' => 'nullable|integer|min:0|max:9999',
            'icon_url' => 'nullable|url|max:1024',
            'video_url' => 'nullable|url|max:1024',
            'prices' => 'nullable|array'
        ];
    }
}
