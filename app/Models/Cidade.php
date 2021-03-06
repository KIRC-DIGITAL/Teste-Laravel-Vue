<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'estado_id', 'codigo', 'nome',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
