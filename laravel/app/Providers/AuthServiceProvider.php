<?php

namespace App\Providers;

use App\Policies\AdministradorPolicy;
use App\Policies\CategoriaPolicyPolicy;
use App\Policies\FeiraPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        FeiraPolicy::class => FeiraPolicy::class,
        AdministradorPolicy::class => AdministradorPolicy::class,
        CategoriaPolicyPolicy::class => CategoriaPolicyPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
