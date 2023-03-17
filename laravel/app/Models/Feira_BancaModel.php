<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira_BancaModel extends Model {

    use HasFactory;

    public function feira() {
        return $this->belongsTo('App\Models\FeiraModel');
    }

    public function banca() {
        return $this->belongsTo('App\Models\BancaModel');
    }
}
