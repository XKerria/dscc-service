<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|string|between:2,64',
            'type' => 'required|string',
            'contact' => 'nullable|string',
            'contact_num' => 'nullable|string',
            'intro' => 'nullable|string|max:1024'
        ];
    }
}
