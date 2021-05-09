<?php

namespace App\Http\Controllers\Manage;

use App\Exceptions\IncorrectPasswordException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\PasswordRequest;
use App\Http\Requests\Manage\UserRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(User::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, User $user) {
        $chain = new FindOneQueryChain($user, $request->query());
        return $chain->handle();
    }

    function store(UserRequest $request) {
        $data = $request->validated();
        $data['admin'] = true;
        return User::create($data);
    }

    function update(UserRequest $request, User $user) {
        $user->fill($request->validated());
        $user->save();
        return $user;
    }

    function destroy(User $user) {
        $count = User::where('admin', true)->count();
        if ($count <= 1) return 0;
        return $user->delete();
    }

    function password(PasswordRequest $request, User $user) {
        $data = $request->validated();
        if (!Hash::check($data['original'], $user->password)) throw new IncorrectPasswordException();
        $user->password = $data['password'];
        $user->save();
        return $user->refresh();
    }
}
