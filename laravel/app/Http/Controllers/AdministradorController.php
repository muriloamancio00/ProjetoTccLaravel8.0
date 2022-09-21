<?php

namespace App\Http\Controllers;
use App\Models\Administrador;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $this->authorize('viewAny', Administrador::class);
        $this->authorizeForUser($administrador = new Administrador(),'viewAny',Administrador::class);

        $administradores = Administrador::all();

        return view('administradores.index', compact('administradores','administrador'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador) {

        $this->authorize('view', $administrador);
    
        return view('administradores.show');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create() {

        $this->authorize('create', Administrador::class);

        return view('administradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->authorize('create', Administrador::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */


    public function edit(Administrador $administrador){

        $this->authorize('update', $administrador);

        return view('administradores.edit');
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador) {

        $this->authorize('update', $administrador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador) {

        $this->authorize('delete', $administrador);

        return view('administradores.destroy');

    }
}
