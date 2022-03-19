<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TodosCategoriaRelacoesPublicas extends Model
{
    use SoftDeletes;

    protected $table = 'todos_categoria_relacoes_publicas';
    protected $fillable = [
        'categoria_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}