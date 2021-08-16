<?php

namespace App\Models;

use App\Models\Scopes\ResolveScope;
use Illuminate\Database\Eloquent\Model;

class ReserveItem extends Model
{
    use ResolveScope;

    protected $table = 'reserve_items';
}
