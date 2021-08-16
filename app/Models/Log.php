<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use Snowflakable,
        ResolveScope;

    protected $guarded = [];
}
