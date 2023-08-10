<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class diaSemana extends Model
{
    protected $table = 'diaSemana';
    protected $fillable = [
        'nome',
    ];

    // Relacionamento com a tabela de dias da semana (uma feira pertence a um dia da semana)
    public function feira()
    {
        return $this->belongsTo(Feira::class);
    }
}
