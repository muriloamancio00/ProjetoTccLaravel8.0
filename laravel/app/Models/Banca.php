<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banca extends Model {

    use HasFactory;

    protected $fillable = [
        'nome',
        'feira_id',
        'feirante_id',
        'descricao',
        'fotoPath',
    ];

}
