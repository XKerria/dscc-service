<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\StaffRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Staff::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Staff $staff) {
        $chain = new FindOneQueryChain($staff, $request->query());
        return $chain->handle();
    }

    function store(StaffRequest $request) {
        return Staff::create($request->validated());
    }

    function update(StaffRequest $request, Staff $staff) {
        $staff->fill($request->validated());
        $staff->save();
        return $staff->refresh();
    }

    function destroy(Staff $staff) {
        $staff->delete();
        return $staff;
    }
}
