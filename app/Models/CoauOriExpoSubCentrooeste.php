<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoauOriExpoSubCentrooeste extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'submissao_id',
        'nome_completo',
        'cpf',
        'categoria',
        'curso_coautor',
    ];

    public function submissao(){
        return $this->hasOne(SubmissaoExpocomRegionalCentrooeste::class, 'id', 'submissao_id');
    }
}
