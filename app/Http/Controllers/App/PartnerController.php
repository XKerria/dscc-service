<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Libs\Query\FindAllQueryChain;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Partner::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }
}
