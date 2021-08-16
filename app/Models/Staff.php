<?php

namespace App\Models;

use App\Models\Abilities\DateFormatable;
use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;


    protected $table = 'staffs';

    protected $guarded = [];

    public function reserves(): HasMany {
        return $this->hasMany(Staff::class);
    }
}
