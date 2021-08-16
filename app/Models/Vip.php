<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vip extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $guarded = [];

    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
