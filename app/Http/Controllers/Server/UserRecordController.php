<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\RecordRequest;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserRecordController extends Controller
{
    function index(Request $request, User $user) {
        $query = $user->records()->getQuery()->resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function store(RecordRequest $request, User $user) {
        $data = $request->validated();

        $points = intval(Arr::get($data, 'points', 0));
        if ($points < 0 && $user->points + $points < 0) {
            $data['remark'] = $points .' '. $data['remark'] . '（溢出）';
            $data['points'] = -$user->points;
        }

        return DB::transaction(function () use($user, $data) {
            $user->increment('points', $data['points']);
            return $user->records()->create($data);
        });
    }
}
