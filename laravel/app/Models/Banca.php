<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banca extends Model {

    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'feira_id',
        'feirante_id',
    ];

    // Relacionamento com a tabela Feiras (uma banca pertence a uma feira)
    public function feira()
    {
        return $this->belongsTo(Feira::class);
    }

    // Relacionamento com a tabela Feirantes (uma banca pertence a um feirante)
    public function feirante()
    {
        return $this->belongsTo(Feirante::class);
    }

}
