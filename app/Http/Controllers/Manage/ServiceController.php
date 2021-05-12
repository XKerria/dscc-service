<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\ServiceRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Service::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Service $service) {
        $chain = new FindOneQueryChain($service, $request->query());
        return $chain->handle();
    }

    function store(ServiceRequest $request) {
        return Service::create($request->validated());
    }

    function update(ServiceRequest $request, Service $service) {
        $service->fill($request->validated());
        $service->save();
        return $service->refresh();
    }

    function destroy(Service $service) {
        $service->delete();
        return $service;
    }
}
