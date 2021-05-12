<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\ReserveRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Reserve::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Reserve $reserve) {
        $chain = new FindOneQueryChain($reserve, $request->query());
        return $chain->handle();
    }

    function store(ReserveRequest $request) {
        return Reserve::create($request->validated());
    }

    function update(ReserveRequest $request, Reserve $reserve) {
        $reserve->fill($request->validated());
        $reserve->save();
        return $reserve->refresh();
    }

    function destroy(Reserve $reserve) {
        $reserve->delete();
        return $reserve;
    }
}
