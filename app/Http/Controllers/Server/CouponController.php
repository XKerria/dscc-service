<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller {
    function index(Request $request) {
        $query = Coupon::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Coupon $coupon) {
        return $coupon;
    }

    function store(CouponRequest $request) {
        return Coupon::create($request->validated());
    }

    function update(CouponRequest $request, Coupon $coupon) {
        $coupon->fill($request->validated())->save();
        return $coupon->fresh();
    }

    function destroy(Coupon $coupon) {
        return $coupon->delete();
    }
}
