<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function show(Service $service) {
        return $service;
    }
}
