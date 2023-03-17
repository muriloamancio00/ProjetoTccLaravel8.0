<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEventoModel extends Model
{
    use HasFactory;

    public function tipoEvento() {
        return $this->belongsTo('App\Models\EventoModel');
    }
}
