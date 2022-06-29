<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use SoftDeletes;

    protected $table = 'tipos';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
