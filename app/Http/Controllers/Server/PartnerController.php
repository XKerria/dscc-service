<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\PartnerRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function index(Request $request) {
        $query = Partner::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Partner $partner) {
        return $partner;
    }

    function store(PartnerRequest $request) {
        return Partner::create($request->validated());
    }

    function update(PartnerRequest $request, Partner $partner) {
        $partner->fill($request->validated())->save();
        return $partner->fresh();
    }

    function destroy(Partner $partner) {
        return $partner->delete();
    }
}
