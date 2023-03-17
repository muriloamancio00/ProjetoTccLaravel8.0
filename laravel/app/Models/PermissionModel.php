<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    use HasFactory;

    public function resource() {

        return $this->belongsTo('\App\Models\ResourceModel');

    }

    public function role() {

        return $this->belongsTo('\App\Models\RoleModel');
    }


}
