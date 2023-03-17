<?php

namespace App\Http\Controllers;

use App\Models\TipoEventoModel;
use Illuminate\Http\Request;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->authorize('viewAny', Feira::class);

        $tipoEvento = TipoEventoModel::all();

        return view('tipoEventos.index', compact('tipoEvento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $this->authorize('create', TipoEventoModel::class);

        return view('tipoEventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->authorize('create', Feira::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEventoModel  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEventoModel $tipoEvento) {

        $this->authorize('view', $tipoEvento);

        return view('tipoEventos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEventoModel  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEventoModel $tipoEvento) {

         $this->authorize('update', $tipoEvento);

        return view('tipoEventos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoEventoModel  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoEventoModel $tipoEvento) {

        $this->authorize('update', $tipoEvento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEventoModel  $tipoEvento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEventoModel $tipoEvento) {

        $this->authorize('delete', $tipoEvento);

        return view('tipoEventos.destroy');
    }
}
