<?php

namespace App\Models;

use App\Models\Abilities\DateFormatable;
use App\Models\Abilities\Snowflakable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory,
        Snowflakable,
        DateFormatable;

    protected $guarded = [];

    protected $casts = ['info' => 'json'];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
