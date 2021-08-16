<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\TicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TicketController extends Controller
{
    function index(Request $request) {
        $query = Ticket::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function store(TicketRequest $request) {
        $ticket = new Ticket($request->validated());
        $coupon = $ticket->coupon;
        $ticket->expired_at =  Carbon::now()->modify('+'.$coupon->expire.' '.$coupon->expire_unit.'s')->toDateTime();
        $ticket->save();
        return $ticket->fresh();
    }
}
