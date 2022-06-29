<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaRelacoesPublicas extends Model
{
    use SoftDeletes;

    protected $fillable = ['descricao'];
}
