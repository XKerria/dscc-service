<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\SettingRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Setting::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Setting $setting) {
        return $setting;
    }

    function update(SettingRequest $request, Setting $setting) {
        $setting->fill($request->validated());
        $setting->save();
        return $setting;
    }
}
