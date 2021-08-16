<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\VehicleRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    function index(Request $request) {
        $query = Vehicle::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Vehicle $vehicle) {
        return $vehicle;
    }

    function store(VehicleRequest $request) {
        $vehicle = Vehicle::create($request->validated());
        return $vehicle->fresh();
    }

    function update(VehicleRequest $request, Vehicle $vehicle) {
        $vehicle->fill($request->validated())->save();
        return $vehicle->fresh();
    }

    function destroy(Vehicle $vehicle) {
        return $vehicle->delete();
    }
}
