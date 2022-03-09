<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class EnderecoIndicacao extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'municipio_id',
        'estado_id',
        'pais_id',

    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

}
