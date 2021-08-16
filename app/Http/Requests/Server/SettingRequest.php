<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        $method = strtolower($this->method());
        if ($method == 'put') {
            return [
                'value' => 'nullable|string|max:1000'
            ];
        }
        return [
            'name' => 'required|string|between:2,32',
            'value' => 'nullable|string|max:1000'
        ];
    }
}
