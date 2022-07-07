<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'phone' => 'required|string',
            'points' => 'nullable|integer|min:0',
            'vip_id' => 'nullable|string|exists:vips,id',

            'openid' => 'nullable|string',
            'session_key' => 'nullable|string',
            'nickname' => 'nullable',
            'avatar' => 'nullable',
            'language' => 'nullable',
            'country' => 'nullable',
            'province' => 'nullable',
            'city' => 'nullable',
            'gender' => 'nullable',
            'remark' => 'nullable|string',
        ];
    }
}
