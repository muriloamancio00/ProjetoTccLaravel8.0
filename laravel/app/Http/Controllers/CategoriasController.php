<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Categorias;
use App\Models\Feira;
use Illuminate\Http\Request;


//pq categorias
//pq seram implementadas bancas e tipos de produtos, ou eventos
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        //$this->authorize('viewAny','categorias');
    }
    public function index()
    {
        return view('categorias.index');

        $categorias = Categorias::all();
        $administradores = Administrador::all();
        $feiras = Feira::all();

        return view('feiras.index', compact('categorias','administradores','feiras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorias $categorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categorias)
    {
        //
    }
}
