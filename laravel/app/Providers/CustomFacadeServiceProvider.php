<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facades\UserPermissions;
use App\Facades\FeirantePermissions;


class CustomFacadeServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {

        $this->app->bind('userpermissions',function(){

            return new UserPermissions();
        });

        $this->app->bind('feirantepermissions',function(){

            return new FeirantePermissions();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
