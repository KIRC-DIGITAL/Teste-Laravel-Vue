<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoautorOrganizadoresSubNaci extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'submissao_id',
        'nome_completo',
        'cpf',
        'categoria',
    ];
}
