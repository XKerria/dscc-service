<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Libs\Query\FindAllQueryChain;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function index(Request $request) {
        $query = Partner::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }
}
