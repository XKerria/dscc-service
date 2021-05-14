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
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'car' => 'required|string|exists:cars,name',
            'duration' => 'required|string',
            'remark' => 'nullable'
        ],
        '接送' => [
            'staff' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'car' => 'required|string|exists:cars,name',
            'from' => 'required|array',
            'to' => 'required|array',
            'distance' => 'required|string',
            'remark' => 'nullable'
        ],
        '代驾' => [
            'staff' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'remark' => 'nullable'
        ],
        '物品送取' => [
            'staff' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'remark' => 'nullable'
        ],
        '家政服务' => [
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'location' => 'required|array',
            'duration' => 'required|string',
            'remark' => 'nullable'
        ],
        '商品、奢侈品代购' => [
            'staff' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'remark' => 'nullable'
        ],
        '商务、酒会、聚会、娱乐出席' => [
            'staff' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'location' => 'required|array',
            'duration' => 'required|string',
            'remark' => 'nullable'
        ],
        '美容、保养、维修、紧急救援' => [
            'model' => 'required|string',
            'business' => 'required|string',
            'remark' => 'nullable',
        ],
        '酒店预订' => [
            'staff' => 'required|string',
            'identity' => 'required|string|size:18',
            'partner' => 'nullable|string',
            'specify' => 'required_without:partner|array',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
            'room' => 'required|string',
            'remark' => 'nullable',
        ],
        '票务预订' => [
            'staff' => 'required|string',
            'identity' => 'required|string|size:18',
            'partner' => 'nullable|string',
            'specify' => 'required_without:partner|array',
            'date' => 'required|date',
            'time' => 'required|string',
            'remark' => 'nullable',
        ],
        '娱乐预订' => [
            'staff' => 'required|string',
            'identity' => 'required|string|size:18',
            'partner' => 'nullable|string',
            'specify' => 'required_without:partner|array',
            'date' => 'required|date',
            'time' => 'required|string',
            'remark' => 'nullable',
        ],
        '出行、接待、宴会、求婚、旅行定制' => [
            'business' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'desc' => 'required|string|max:1000',
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
