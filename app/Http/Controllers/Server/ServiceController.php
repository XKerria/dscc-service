<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(Request $request) {
        $query = Service::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Service $service) {
        return $service;
    }

    function store(ServiceRequest $request) {
        return Service::create($request->validated());
    }

    function update(ServiceRequest $request, Service $service) {
        $service->fill($request->validated())->save();
        return $service->refresh();
    }

    function destroy(Service $service) {
        return $service->delete();
    }
}
