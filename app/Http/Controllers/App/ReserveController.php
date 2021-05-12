<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\ReserveRequest;
use App\Models\Reserve;
use Illuminate\Support\Arr;

class ReserveController extends Controller
{
    function store(ReserveRequest $request) {
        $data = $request->validated();
        $name = Arr::pull($data, 'name');
        $phone = Arr::pull($data, 'phone');
        $service_id = Arr::pull($data, 'service_id');

        return Reserve::create([
            'name' => $name,
            'phone' => $phone,
            'service_id' => $service_id,
            'info' => array_filter($data)
        ]);
    }
}
