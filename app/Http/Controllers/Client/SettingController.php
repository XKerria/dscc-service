<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index() {
        return Setting::all();
    }

    function show(Setting $setting) {
        return $setting;
    }
}
