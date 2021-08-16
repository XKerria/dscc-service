<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $guarded = [];

    protected $with = ['vip'];

    public function vip(): BelongsTo {
        return $this->belongsTo(Vip::class);
    }

    public function records(): HasMany {
        return $this->hasMany(Record::class);
    }

    public function coupons() {
        return $this->belongsToMany(Coupon::class, 'tickets')
            ->using(Ticket::class)
            ->as('ticket')
            ->withPivot(['id', 'partner_id'])
            ->withTimestamps();
    }
}
