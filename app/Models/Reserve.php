<?php

namespace App\Models;

use App\Models\Abilities\DateFormatable;
use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserve extends Model
{
    use HasFactory,
        Snowflakable,
        DateFormatable,
        ResolveScope;

    protected $guarded = [];

    protected $casts = ['info' => 'json'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function service(): BelongsTo {
        return $this->belongsTo(Service::class);
    }

    public function staff(): BelongsTo {
        return $this->belongsTo(Staff::class);
    }

    public function ticket(): BelongsTo {
        return $this->belongsTo(Ticket::class);
    }
}
