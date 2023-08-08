<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //para ser proucurada a tabela correta dentro do bd
    protected $table = 'administradores';

    use HasFactory;

    protected $fillable = [
        'apelido',
        'telefone',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
    public function feira() {
        return $this->belongsToMany('\App\Models\Feira', 'feiras');
    }

}
