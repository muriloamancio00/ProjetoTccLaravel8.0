<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;


class UserPermissionsFacade extends Facade {

    protected static function getFacadeAccessor(){

        return 'userpermissions'; //mesmo nome do metodo vinculado no service provider
    }


}