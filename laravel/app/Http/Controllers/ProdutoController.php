<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $this->authorize('viewAny', ProdutoModel::class);

        $produtos = ProdutoModel::all();

        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->authorize('create', ProdutoModel::class);

        return view('produtos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutoModel $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoModel $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoModel $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoModel $produto)
    {
        //
    }
}
