<?php

namespace App\View\Components;

use App\Models\Banca;
use App\Models\Feira;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{
    private Banca $bancas;
    private Feira $feiras;

    private User $users;

    public function __construct(?Banca $bancas, ?Feira $feiras,  ?User $users)
    {
        $this->bancas = $bancas;
        $this->feiras = $feiras;
        $this->users = $users;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show');
    }
}
