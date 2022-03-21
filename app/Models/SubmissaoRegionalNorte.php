<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubmissaoRegionalNorte extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'inscricao_id',
        'ciente',
        'dt',
        'tipo',
        'titulo',
        'palavra_chave_1',
        'palavra_chave_2',
        'palavra_chave_3',
        'palavra_chave_4',
        'palavra_chave_5',
        'termo_autoria',
        'autorizacao',
        'link_trabalho'
    ];

    public function coautorOrientadorSubNortes()
    {
        return $this->hasMany(CoautorOrientadorSubNorte::class,  'submissao_id', 'id');
    }
}
