<?php

namespace App\Http\Controllers\Manage;

use App\Exceptions\IncorrectPasswordException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\AuthRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected string $tokenname = 'tokenname';

    function current() {
        return Auth::user();
    }

    function auth(AuthRequest $request) {
        $data = $request->validated();
        $user = User::where('username', $data['username'])->firstOrFail();
        if (!Hash::check($data['password'], $user->password)) throw new IncorrectPasswordException();
        $user->tokens()->delete();

        $data = [
            'user' => $user,
            'token' => $user->createToken($this->tokenname)->plainTextToken,
        ];
        $expiration = config('sanctum.expiration', null);
        if (!is_null($expiration)) {
            $data['expired_at'] = Carbon::now()->add(intval($expiration), 'minute');
        }
        return $data;
    }

    function refresh() {
        $user = Auth::user();
        $data = ['token' => $user->createToken($this->tokenname)->plainTextToken];
        $expiration = config('sanctum.expiration', null);
        if (!is_null($expiration)) {
            $data['expired_at'] = Carbon::now()->add(intval($expiration), 'minute');
        }
        return $data;
    }
}
