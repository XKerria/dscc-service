<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Vip;
use Illuminate\Http\Request;

class VipController extends Controller
{
    function index() {
        return Vip::all();
    }
}
