<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'cover_url' => 'required|url|max:1024',
            'image_url' => 'required|url|max:1024',
            'priority' => 'required|integer|between:0,9999',
            'content' => 'nullable|string|max:65535'
        ];
    }
}
