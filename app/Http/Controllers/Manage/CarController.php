<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\CarRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Car::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Car $car) {
        $chain = new FindOneQueryChain($car, $request->query());
        return $chain->handle();
    }

    function store(CarRequest $request) {
        return Car::create($request->validated());
    }

    function update(CarRequest $request, Car $car) {
        $car->fill($request->validated());
        $car->save();
        return $car->refresh();
    }

    function destroy(Car $car) {
        $car->delete();
        return $car;
    }
}
