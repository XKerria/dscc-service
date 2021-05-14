<?php

namespace App\Http\Requests\Manage;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|string|between:2,64',
            'type' => 'required|string|in:hotel,ticket,ent',
            'intro' => 'nullable|string|max:255'
        ];
    }
}
