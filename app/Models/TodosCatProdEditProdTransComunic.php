<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TodosCatProdEditProdTransComunic extends Model
{
    use SoftDeletes;

    protected $table = 'todos_cat_prod_edit_trans_comunic';

    protected $fillable = [
        'categoria_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
