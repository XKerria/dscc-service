<?php

namespace App\Models;

use App\Models\Abilities\DateFormatable;
use App\Models\Abilities\Snowflakable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory,
        Snowflakable,
        DateFormatable;


    protected $table = 'staff';

    protected $guarded = [];
}
