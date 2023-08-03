<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;


class FeirantePermissionsFacade extends Facade {

    protected static function getFacadeAccessor(){

        return 'feirantepermissions'; //mesmo nome do metodo vinculado no service provider
    }


}
