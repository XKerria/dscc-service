<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index(Request $request) {
        return Setting::resolve($request->query())->get();
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
