<?php

namespace App\Http\Requests\Manage;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|between:2,255',
            'image' => 'required|url|max:1800',
            'logo' => 'required|url|max:1800',
            'rent' => 'required|numeric|min:0|between:0,9999999.99',
            'fare' => 'required|numeric|min:0|between:0,9999999.99',
        ];
    }
}
