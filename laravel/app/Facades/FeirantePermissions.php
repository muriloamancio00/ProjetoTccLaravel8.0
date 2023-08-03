<?php

namespace App\Facades;
use App\Models\Permission;

class FeirantePermissions {

    public static function loadPermissions($feirante_role) {

        $sess = Array();

        $perm = Permission::with('resource')->where('role_id', $feirante_role)->get();

        foreach($perm as $item) {

            $sess[$item->resource->name] = (boolean) $item->permissao;

        }

        session(['feirante_permissions' => $sess]);

    }

    public static function isAuthorized($resource) {

        $permissions = session('feirante_permissions');

        return $permissions[$resource];

    }

    public static function test() {

        return "<h1>FeirantePermissions - Running!!</h1>";
    }
}

