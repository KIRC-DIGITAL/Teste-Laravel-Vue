<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PagSeguroTipoStatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'memo'
    ];

}
