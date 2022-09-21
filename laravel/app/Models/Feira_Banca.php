<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira_Banca extends Model {

    use HasFactory;

    public function feira() {
        return $this->belongsTo('App\Models\Feira');
    }
        
    public function banca() {
        return $this->belongsTo('App\Models\Banca');
    }
}
