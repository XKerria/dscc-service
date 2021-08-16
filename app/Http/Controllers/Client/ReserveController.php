<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ReserveRequest;
use App\Models\Reserve;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    function index(Request $request) {
        $query = Reserve::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function store(ReserveRequest $request) {
        $data = $request->validated();
        $name = Arr::pull($data, 'name');
        $phone = Arr::pull($data, 'phone');
        $remark = Arr::pull($data, 'remark');

        $user_id = Arr::pull($data, 'user_id');
        $service_id = Arr::pull($data, 'service_id');
        $staff_id = Arr::pull($data, 'staff_id');
        $ticket_id = Arr::pull($data, 'ticket_id');

        $data = [
            'name' => $name,
            'phone' => $phone,
            'user_id' => $user_id,
            'service_id' => $service_id,
            'staff_id' => $staff_id,
            'ticket_id' => $ticket_id,
            'remark' => $remark,
            'info' => array_filter($data)
        ];

        $ticket = Ticket::find($ticket_id);

        return DB::transaction(function () use($ticket, $data) {
            if (!is_null($ticket)) {
                $ticket->used_at = now();
                $ticket->save();
            }
            return Reserve::create($data);
        });
    }
}
