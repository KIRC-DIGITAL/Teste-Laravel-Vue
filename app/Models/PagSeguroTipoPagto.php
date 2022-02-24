<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PagSeguroTipoPagto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
    ];
}
