<?php

namespace App\Http\Controllers;
use App\Facades\UserPermissions;
use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if(!PermissionController::isAuthorized('administradores.index')) {

            abort(403);

        }

        $administradores = Administrador::all();

        $permissions = session('user_permissions');

        return view('administradores.index', compact('permissions','administradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        if(!UserPermissions::isAuthorized('administradores.create')) {
        
            abort(403);
        
        }

        return view('administradores.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        Administrador::create([
            "nome" => mb_strtoupper($request->nome),
            "senha" => ($request->senha),
            "email" => ($request->email),
        ]);

        return redirect()->route('administradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador) {
    
        return view('administradores.show', compact(['administrador']));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador){

        return view('administradores.edit', compact(['administrador']));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador) {

        if(!UserPermissions::isAuthorized('administradores.create')) {
        
            abort(403);
        
        }

        $administrador->update([

            "nome" => mb_strtoupper($request->nome),
            "senha" => ($request->senha),
            "email" => ($request->email)

        ]);

        return redirect()->route('administradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador) {

        if(!UserPermissions::isAuthorized('administradores.destroy')) {
        
            abort(403);
        
        }

        $administrador->delete();

        return redirect()->route('administradores.index');
    }
}
