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
        if(!PermissionController::isAuthorized('feirantes.index')) {

            abort(403);

        }

        $feirantes = Feirante::all();

        $permissions = session('user_permissions');

        return view('feirantes.index', compact('permissions','feirantes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(!UserPermissions::isAuthorized('feirantes.create')) {
        
            abort(403);
        
        }

        return view('feirantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        Feirante::create([
            "nome" => mb_strtoupper($request->nome),
            "senha" => ($request->senha),
            "email" => ($request->email),
            //"type_id" => ($request->type_id),
        ]);

        return redirect()->route('feirantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function show(Feirante $feirante)
    {
        return view('feirantes.show', compact(['feirante']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function edit(Feirante $feirante)
    {
        return view('feirantes.edit', compact(['feirante']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feirante $feirante){

        if(!UserPermissions::isAuthorized('feirantes.create')) {
        
            abort(403);
        
        }

        $feirante->update([

            "nome" => mb_strtoupper($request->nome),
            "senha" => ($request->senha),
            "email" => ($request->email)
            //"type_id" => ($request->type_id),
        ]);

        return redirect()->route('feirantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feirante  $feirante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feirante $feirante)
    {
        if(!UserPermissions::isAuthorized('feirantes.destroy')) {
        
            abort(403);
        
        }

        $feirante->delete();

        return redirect()->route('feirantes.index');
    }
}
