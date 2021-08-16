<?php

namespace App\Http\Controllers\Server;

use App\Exceptions\IncorrectPasswordException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Server\PasswordRequest;
use App\Http\Requests\Server\AdminRequest;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(Request $request) {
        $query = Admin::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Admin $admin) {
        return $admin;
    }

    function store(AdminRequest $request) {
        return Admin::create($request->validated());
    }

    function update(AdminRequest $request, Admin $admin) {
        $admin->fill($request->validated());
        $admin->save();
        return $admin;
    }

    function destroy(Admin $admin) {
        $count = Admin::count();
        if ($count <= 1) return 0;
        return $admin->delete();
    }

    function password(PasswordRequest $request, Admin $admin) {
        $data = $request->validated();
        if (!Hash::check($data['original'], $admin->password)) throw new IncorrectPasswordException();
        $admin->password = $data['password'];
        $admin->save();
        return $admin->refresh();
    }
}
