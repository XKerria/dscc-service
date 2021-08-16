<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\VipRequest;
use App\Models\Vip;
use Illuminate\Http\Request;

class VipController extends Controller {
    function index(Request $request) {
        $query = Vip::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Vip $vip) {
        return $vip;
    }

    function store(VipRequest $request) {
        return Vip::create($request->validated());
    }

    function update(VipRequest $request, Vip $vip) {
        $vip->fill($request->validated())->save();
        return $vip->fresh();
    }

    function destroy(Vip $vip) {
        return $vip->delete();
    }
}
