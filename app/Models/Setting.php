<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    public $timestamps = false;
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'name';
    }
}
