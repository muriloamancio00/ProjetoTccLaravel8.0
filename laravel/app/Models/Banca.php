<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banca extends Model {

    use HasFactory;

    protected $fillable = [
        'nome',
        'id_feira',
        'id_listaProduto',
        'ativo',
    ];

    public function feira__bancas() {
        return $this->hasMany('\App\Models\Feira_Banca');
    }

    public function listaProduto() {
        return $this->hasOne('\App\Models\ListaProduto');
    }
        
        
        
}
