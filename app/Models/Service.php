<?php

namespace App\Models;

use App\Models\Abilities\DateFormatable;
use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $guarded = [];

    protected $casts = [
        'prices' => 'array',
        'items' => 'array'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function reserves() {
        return $this->hasMany(Reserve::class);
    }
}
