<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\SaleRequest;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller {
    function index(Request $request) {
        $query = Sale::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Sale $sale) {
        return $sale;
    }

    function store(SaleRequest $request) {
        $sale = Sale::create($request->validated());
        return $sale->fresh();
    }

    function update(SaleRequest $request, Sale $sale) {
        $sale->fill($request->validated())->save();
        return $sale->fresh();
    }

    function destroy(Sale $sale) {
        return $sale->delete();
    }
}
