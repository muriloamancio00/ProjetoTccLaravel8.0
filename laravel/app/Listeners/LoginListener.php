<?php

namespace App\Listeners;
use App\Events\HomeEvent;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        info("[LoginListener]: Usuário ok!");

        info("[LoginListener]: ".$event->user->email);
        info("[LoginListener]: ".$event->user->name);

    }
}
