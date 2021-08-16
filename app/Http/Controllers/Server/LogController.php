<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller {
    function index(Request $request) {
        $query = Log::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Log $log) {
        return $log;
    }
}
