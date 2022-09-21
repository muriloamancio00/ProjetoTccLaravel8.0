<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaProduto extends Model
{
    use HasFactory;

    public function listaProduto() {
        return $this->belongsTo('App\Models\Banca');
    }
}
