<?php

namespace App\Http\Controllers;

use App\Models\Feirante;
use App\Facades\UserPermissions;
use Illuminate\Http\Request;

class FeiranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        // Recuperar todos os feirante juntamente com os usuários associados a eles
        $feirante = Feirante::with('user')->get();

        return view('feirante.index', compact( 'feirante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('feirante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        Feirante::create([
            "apelido" => mb_strtoupper($request->apelido),
            "telefone" => ($request->telefone),
            "id_user" => ($request->id),
            //"type_id" => ($request->type_id),
        ]);

        return redirect()->route('feirante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function show(Feirante $feirante)
    {
        return view('feirante.show', compact(['feirante']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function edit(Feirante $feirante)
    {
        return view('feirante.edit', compact('feirante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feirante $feirante){

        if(!UserPermissions::isAuthorized('feirante.create')) {

            abort(403);

        }

        $feirante->update([

            "nome" => mb_strtoupper($request->nome),
            "senha" => ($request->senha),
            "email" => ($request->email)
            //"type_id" => ($request->type_id),
        ]);

        return redirect()->route('feirante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feirante $feirante)
    {
        if(!UserPermissions::isAuthorized('feirante.destroy')) {

            abort(403);

        }

        $feirante->delete();

        return redirect()->route('feirante.index');
    }
}
