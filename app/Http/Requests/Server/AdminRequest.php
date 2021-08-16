<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|between:2,32',
            'phone' => 'required|string',
        ];
        if ($this->method() == 'POST') {
            $rules['password'] = 'required|string|between:6,32';
        }
        if ($this->method() == 'PUT') {
            $rules['password'] = 'nullable|string|between:6,32';
        }
        return $rules;
    }
}
