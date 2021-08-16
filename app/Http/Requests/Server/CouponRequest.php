<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'title' => 'required|string|max:32',
            'type' => 'required|string|max:32',
            'value' => 'required|integer|min:0|max:99999',
            'expire' => 'nullable|integer|min:0|max:9999',
            'expire_unit' => 'nullable|string|in:minute,hour,day,week,month,quarter,year',
            'remark' => 'nullable|string|max:32'
        ];
    }
}
