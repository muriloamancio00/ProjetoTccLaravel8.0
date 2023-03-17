<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProdutoModel extends Model
{
    use HasFactory;

    public function tipoProduto() {
        return $this->belongsTo('App\Models\ProdutoModel');
    }

}