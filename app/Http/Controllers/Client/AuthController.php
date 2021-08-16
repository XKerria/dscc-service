<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\CodeRequest;
use App\Models\User;
use App\Services\WechatService;

class AuthController extends Controller
{
    private WechatService $service;

    public function __construct() {
        $this->service = new WechatService();
    }

    function login(CodeRequest $request) {
        $data = $request->validated();
        $result = $this->service->session($data['code']);
        $account = User::where('openid', $result['openid'])->first();
        if ($account) return $account;
        return $result;
    }
}
