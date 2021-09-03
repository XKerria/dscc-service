<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class VipRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'icon_url' => 'required|url|max:1024',
            'desc' => 'nullable|string'
        ];
    }
}
