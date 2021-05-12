<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
{
    private array $base = [
        'name' => 'required|string|between:2,32',
        'phone' => 'required|regex:/^1[3-9][0-9]{9}$/',
        'service_id' => 'required|exists:services,id',
    ];
    private array $map = [
        '自驾' => [
            'car' => 'required|string|exists:cars,name',
            'date' => 'required|date|after:now',
            'duration' => 'required|string',
            'remark' => 'nullable'
        ],
        '接送' => [
            'car' => 'required|string|exists:cars,name',
            'date' => 'required|date|after:now',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'staff' => 'required|string|exists:staff,name',
            'from' => 'required|array',
            'to' => 'required|array',
            'remark' => 'nullable'
        ],
        '代驾' => [
            'car' => 'required|string|exists:cars,name',
            'date' => 'required|date|after:now',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'staff' => 'required|string|exists:staff,name',
            'from' => 'required|array',
            'to' => 'required|array',
            'remark' => 'nullable'
        ],
        '物品送取' => [
            'date' => 'required|date|after:now',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'from' => 'required|array',
            'to' => 'required|array',
            'remark' => 'nullable'
        ],
        '家政服务' => [
            'date' => 'required|date|after:now',
            'location' => 'required|array',
            'remark' => 'nullable'
        ],
        '商品、奢侈品代购' => [
            'date' => 'required|date|after:now',
            'location' => 'required|array',
            'thing' => 'required|string'
        ],
        '商务、酒会、聚会、娱乐出席' => [
            'business' => 'required|string',
            'staff' => 'required|string|exists:staff,name',
            'date' => 'required|date|after:now',
            'duration' => 'required|string',
            'remark' => 'nullable'
        ],
        '美容、保养、维修、紧急救援' => [
            'business' => 'required|string',
            'model' => 'required|string',
            'date' => 'required|date|after:now',
            'location' => 'nullable|array',
            'remark' => 'nullable',
        ],
        '酒店、票务、娱乐预订' => [
            'business' => 'required|string',
            'date' => 'required|date|after:now',
            'remark' => 'nullable',
        ],
        '出行、接待、宴会、求婚、旅行定制' => [
            'business' => 'required|string',
            'date' => 'required|date|after:now',
            'remark' => 'nullable',
        ],
    ];
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $type = $this->get('type');
        $rules = array_merge($this->base, $this->map[$type]);
        return $rules;
    }
}
