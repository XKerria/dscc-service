<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\StaffRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function index(Request $request) {
        $query = Staff::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Staff $staff) {
        return $staff;
    }

    function store(StaffRequest $request) {
        $staff = Staff::create($request->validated());
        return $staff->fresh();
    }

    function update(StaffRequest $request, Staff $staff) {
        $staff->fill($request->validated())->save();
        return $staff->fresh();
    }

    function destroy(Staff $staff) {
        return $staff->delete();
    }
}
