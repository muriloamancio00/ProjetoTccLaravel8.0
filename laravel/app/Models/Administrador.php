<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'type_id',
    ];

    public function feira() {
        return $this->belongsToMany('\App\Models\Feira', 'feiras');
    }
        
}
