<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\BannerRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Banner::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Banner $banner) {
        $chain = new FindOneQueryChain($banner, $request->query());
        return $chain->handle();
    }

    function store(BannerRequest $request) {
        return Banner::create($request->validated());
    }

    function update(BannerRequest $request, Banner $banner) {
        $banner->fill($request->validated());
        $banner->save();
        return $banner->refresh();
    }

    function destroy(Banner $banner) {
        $banner->delete();
        return $banner;
    }
}
