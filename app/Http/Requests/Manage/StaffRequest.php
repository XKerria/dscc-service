<?php

namespace App\Http\Requests\Manage;

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
            'image' => 'required|url|max:1800',
            'name' => 'required|string|between:2,64',
            'gender' => 'required|integer|between:0,1',
            'type' => 'required|string|in:driver,secretory,housekeeper'
        ];
    }
}
