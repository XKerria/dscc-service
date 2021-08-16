<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $guarded = [];

    protected $casts = ['day_price' => 'double', 'km_price' => 'double'];
}
