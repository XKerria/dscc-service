<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $guarded = [];

    public function users() {
        return $this->belongsToMany(User::class, 'tickets')
            ->using(Ticket::class)
            ->as('ticket')
            ->withPivot(['id', 'partner_id'])
            ->withTimestamps();
    }
}
