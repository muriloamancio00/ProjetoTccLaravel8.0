<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira extends Model {

    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'horarioFeira_id',
        'diaSemana_id',
        'administrador_id',
        // longitude, latitude, horarioFim
        'longitude',
        'latitude',
        'horarioFim',
    ];

}
