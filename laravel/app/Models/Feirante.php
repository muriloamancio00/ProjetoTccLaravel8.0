<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Feirante extends Model
{
    protected $fillable = [
        'apelido',
        'telefone',
    ];

    // Relacionamento com a tabela Users (um feirante pertence a um usuário)
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    // Se você precisar de um relacionamento com a tabela Bancas, você pode adicioná-lo aqui
    // Exemplo:
    // public function bancas()
    // {
    //     return $this->hasMany(Banca::class);
    // }
}
