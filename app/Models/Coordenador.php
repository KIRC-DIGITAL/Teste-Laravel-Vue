<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordenador extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'tipo',
        'regiao',
        'dt',
        'ano',
        'geral',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
