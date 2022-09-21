<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira extends Model {

    use HasFactory;

    protected $fillable = [
        'endereco',
        'horario',
        'diaSemana',
        'id_Administrador',
    ];
        

    public function banca() {
        return $this->belongsToMany('\App\Models\Banca', 'feiras_bancas');
    }
        

}
