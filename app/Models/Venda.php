<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id'
    ];
}
