<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCategoria extends Model
{
    protected $primaryKey = ['produto_id', 'categoria_id'];
    public $incrementing = false;
    protected $fillable = ['produto_id', 'categoria_id'];
}
