<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\DecryptRequest;
use App\Http\Requests\Client\UserRequest;
use App\Models\User;
use App\Services\WechatService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller {
    private WechatService $service;

    public function __construct() {
        $this->service = new WechatService();
    }

    function current(Request $request) {
        $code = $request->query('code', '');
        $result = $this->service->session($code);
        $openid = Arr::get($result, 'openid');
        $user = User::where('openid', $openid)->first();
        if (!is_null($user)) {
            $user->fill($result)->save();
            $user->fresh();
            return $user;
        }
        return $result;
    }

    function store(UserRequest $request) {
        $data = $request->validated();
        $phone = Arr::pull($data, 'phone', '');
        $user = User::updateOrCreate(['phone' => $phone], $data);
        return $user->fresh();
    }

    function update(UserRequest $request, User $user) {
        $user->fill($request->validated())->save();
        return $user;
    }

    function decrypt(DecryptRequest $request) {
        return $this->service->decrypt($request->validated());
    }
}
