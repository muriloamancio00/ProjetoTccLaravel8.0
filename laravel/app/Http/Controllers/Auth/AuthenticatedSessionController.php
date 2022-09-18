<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Administrador;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdministradorPolicy;
use App\Facades\UserPermissions;
use App\Http\Controllers\Controller;

class AuthenticatedSessionController extends Controller {

    protected $policies = [
    
        Administrador::class => AdministradorPolicy::class,
    ];

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request){
        
        $request->authenticate();

        $request->session()->regenerate();

        // Carregando as Permissões do Usuário / Sessão
        UserPermissions::loadPermissions(Auth::user()->role_id);

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
