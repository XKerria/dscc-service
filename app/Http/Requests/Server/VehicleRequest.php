<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|between:2,255',
            'image_url' => 'required|url|max:1024',
            'logo_url' => 'required|url|max:1024',
            'day_price' => 'nullable|numeric|min:0|between:0,99999.99',
            'km_price' => 'nullable|numeric|min:0|between:0,99999.99',
            'remark' => 'nullable|string|max:1024'
        ];
    }
}
