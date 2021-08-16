<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'required|string',
            'image_url' => 'required|url|max:1800',
            'priority' => 'required|integer|between:0,9999',
        ];
    }
}
