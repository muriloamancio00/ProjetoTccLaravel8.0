<?php

namespace App\Http\Controllers;
use App\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    
//-> classe que gerencia as permissoes do usuario

    public static function loadPermissions($user_type) {

        $sess = Array();
        $perm = Permission::where('type_id', $user_type)->get();

        foreach($perm as $item) {

            $sess[$item->regra] = (boolean) $item->permissao;

        }

        session(['user_permissions' => $sess]);
    }

        public static function isAuthorized($rule) {

            $permissions = session('user_permissions');

            return $permissions[$rule];
        }

}
