<?php

namespace App\Facades;
use App\Models\PermissionModel;

class UserPermissions {

    public static function loadPermissions($user_role) {

        $sess = Array();

        $perm = PermissionModel::with('resource')->where('role_id', $user_role)->get();

        foreach($perm as $item) {

            $sess[$item->resource->name] = (boolean) $item->permissao;

        }

        session(['user_permissions' => $sess]);

    }

    public static function isAuthorized($resource) {

        $permissions = session('user_permissions');

        return $permissions[$resource];

    }

    public static function test() {

        return "<h1>UserPermissionsFacade - Running!!</h1>";
    }
}

