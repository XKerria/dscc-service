<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index() {
        return '<h1>Hello, World!</h1>';
    }
}
