<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Libs\Query\FindAllQueryChain;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Banner::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }
}
