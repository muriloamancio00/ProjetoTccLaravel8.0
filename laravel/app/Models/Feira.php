<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira extends Model {

    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'horarioFim',
        'latitude',
        'longitude',
        'administrador_id',
        'diaSemana_id',
        'horarioFeira_id',
    ];

    //Relacionamento com a tabela DiaSemana (uma feira pertence a um dia da semana)
    public function diaSemana()
    {
        return $this->belongsTo(DiaSemana::class,'diaSemana_id');
    }

    // Relacionamento com a tabela Horarios (uma feira pertence a um horário de feira)
    public function horarios()
    {
        return $this->belongsTo(Horario::class, 'horarioFeira_id');
    }

    // Relacionamento com a tabela Administradores (uma feira pertence a um administrador)
    public function administrador()
    {
        return $this->belongsTo(Administrador::class,'administrador_id');
    }

}
