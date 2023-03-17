<?php

namespace App\Http\Controllers;
use App\Models\AdministradorModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $this->authorize('viewAny', AdministradorModel::class);
        $this->authorizeForUser($administrador = new AdministradorModel(),'viewAny',AdministradorModel::class);

        $administradores = AdministradorModel::all();

        return view('administradores.index', compact('administradores','administrador'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(AdministradorModel $administrador) {

        $this->authorize('view', $administrador);

        return view('administradores.show');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() {

        $this->authorize('create', AdministradorModel::class);

        return view('administradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->authorize('create', AdministradorModel::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Http\Response
     */


    public function edit(AdministradorModel $administrador){

        $this->authorize('update', $administrador);

        return view('administradores.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdministradorModel $administrador) {

        $this->authorize('update', $administrador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdministradorModel $administrador) {

        $this->authorize('delete', $administrador);

        return view('administradores.destroy');

    }
}
