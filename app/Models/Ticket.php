<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Ticket extends Pivot
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $table = 'tickets';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }

    public function partner() {
        return $this->belongsTo(Partner::class);
    }
}
