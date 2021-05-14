<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\PartnerRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Partner::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Partner $partner) {
        $chain = new FindOneQueryChain($partner, $request->query());
        return $chain->handle();
    }

    function store(PartnerRequest $request) {
        return Partner::create($request->validated());
    }

    function update(PartnerRequest $request, Partner $partner) {
        $partner->fill($request->validated());
        $partner->save();
        return $partner->refresh();
    }

    function destroy(Partner $partner) {
        $partner->delete();
        return $partner;
    }
}
