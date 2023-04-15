<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */

     //Provider / Eventos - Adicionando evento “HomeEvent” e listener “HomeEventListener”.
    protected $listen = [
        /*
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        'App\Events\HomeEvent' => [
            'App\Listeners\HomeEventListener',

        ],


        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\LoginListener'
        ],


        'Illuminate\Auth\Events\PasswordReset' => [
            'App\Listeners\ResetPassword'
        ],*/

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
