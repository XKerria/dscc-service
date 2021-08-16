<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
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
            'event' => 'required|string|max:255',
            'value' => 'required|string|max:65535',
            'source' => 'nullable|in:app,manage,other',
            'type' => 'nullable|in:debug,info,warning,error',
            'url' => 'nullable|string|max:1024',
            'extra' => 'nullable|string|max:255',
        ];
    }
}
