<?php

namespace App\Models;

use App\Models\Abilities\DateFormatable;
use App\Models\Abilities\Snowflakable;
use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,
        Snowflakable,
        ResolveScope;

    protected $guarded = [];

    public function posts() {
        return $this->hasMany(Post::class)->orderBy('priority');
    }

    public function services() {
        return $this->hasMany(Service::class)->orderBy('priority');
    }

    public function children() {
        return $this->hasMany(Category::class, 'pid');
    }

    public function parent() {
        return $this->belongsTo(Category::class, 'pid');
    }
}
