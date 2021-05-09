<?php

namespace App\Models;

use App\Models\Abilities\Snowflakable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use Snowflakable;

    public $timestamps = false;
    protected $guarded = [];

    protected $casts = ['content' => 'json'];

    public function getRouteKeyName() {
        return 'name';
    }
}
