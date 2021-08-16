<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Libs\Query\FindAllQueryChain;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function index(Request $request) {
        $query = Banner::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }
}
