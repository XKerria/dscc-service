<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
{
    private array $base = [
        'user_id' => 'required|exists:users,id',
        'service_id' => 'required|exists:services,id',
        'staff_id' => 'nullable|exists:staffs,id',
        'ticket_id' => 'nullable|exists:tickets,id',
        'name' => 'required|string|between:2,32',
        'phone' => 'required|regex:/^1[3-9][0-9]{9}$/',
        'remark' => 'nullable|string|max:1024',
    ];

    private array $map = [
        '自驾' => [
            'time' => 'required|string',
            'vehicle' => 'required|string|exists:vehicles,name',
            'duration' => 'required|string',
            'total' => 'required|numeric',
        ],
        '接送' => [
            'time' => 'required|date|after_or_equal:today',
            'vehicle' => 'required|string|exists:vehicles,name',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'total' => 'required|numeric',
        ],
        '代驾' => [
            'time' => 'required|date|after_or_equal:today',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'total' => 'required|numeric',
        ],
        '物品送取' => [
            'time' => 'required|date|after_or_equal:today',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'total' => 'required|numeric',
        ],
        '家政服务' => [
            'time' => 'required|date|after_or_equal:today',
            'location' => 'required|array',
            'duration' => 'required|string',
        ],
        '商品、奢侈品代购' => [
            'time' => 'required|date|after_or_equal:today',
            'from' => 'required|array',
            'to' => 'required|array',
            'duration' => 'required|string',
            'distance' => 'required|string',
            'total' => 'required|numeric',
        ],
        '商务、酒会、聚会、娱乐出席' => [
            'time' => 'required|date|after_or_equal:today',
            'location' => 'required|array',
            'duration' => 'required|string',
            'total' => 'required|numeric',
        ],
        '美容、保养、维修、紧急救援' => [
            'vehicle' => 'required|string',
            'item' => 'required|string',
        ],
        '酒店预订' => [
            'idcard' => 'required|string|size:18',
            'partner' => 'nullable|string',
            'specify' => 'required_without:partner|array',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
            'room' => 'required|string',
        ],
        '票务预订' => [
            'idcard' => 'required|string|size:18',
            'partner' => 'nullable|string',
            'time' => 'required|date|after_or_equal:today',
        ],
        '娱乐预订' => [
            'idcard' => 'required|string|size:18',
            'partner' => 'nullable|string',
            'specify' => 'required_without:partner|array',
            'time' => 'required|date|after_or_equal:today',
        ],
        '出行定制' => [
            'desc' => 'required|string|max:1000',
        ],
        '接待定制' => [
            'desc' => 'required|string|max:1000',
        ],
        '宴会定制' => [
            'desc' => 'required|string|max:1000',
        ],
        '求婚定制' => [
            'desc' => 'required|string|max:1000',
        ],
        '旅行定制' => [
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
