<?php

namespace App\Http\Controllers\Server;

use App\Exceptions\IncorrectPasswordException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Server\AuthRequest;
use App\Http\Requests\Server\LoginRequest;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(LoginRequest $request) {
        $data = $request->validated();
        $user = Admin::where('phone', $data['phone'])->firstOrFail();
        if (!Hash::check($data['password'], $user->password)) throw new IncorrectPasswordException();
        $user->tokens()->delete();
        $token = [
            'access_token' => $user->createToken('server-token')->plainTextToken
        ];
        $expiration = config('sanctum.expiration', null);
        if (!is_null($expiration)) $token['expired_at'] = Carbon::now()->add(intval($expiration), 'minute');
        return $token;
    }

    function refresh() {
        $user = Auth::user();
        $token = [
            'access_token' => $user->createToken('server-token')->plainTextToken
        ];
        $expiration = config('sanctum.expiration', null);
        if (!is_null($expiration)) $token['expired_at'] = Carbon::now()->add(intval($expiration), 'minute');
        return $token;
    }

    function admin() {
        return Auth::user();
    }
}
