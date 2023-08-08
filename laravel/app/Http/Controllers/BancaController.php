<?php

namespace App\Http\Controllers;

use App\Models\Banca;
use App\Models\Feira;
use App\Models\ListaProduto;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Banca::class);

        $bancas = Banca::all();

        //dd($bancas);

        return view('bancas.index', compact('bancas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->authorize('create', Banca::class);

        $feiras = FeiraModel::orderBy('id')->get();

        $listas = ListaProduto::orderBy('id')->get();

        return view('bancas.create', compact(['feiras','listas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->authorize('create', Banca::class);


        $regras = [
            'nome' => 'required|max:50|min:5',
        ];

        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        Banca::create([
            'nome' => $request->nome,
            'id_feira' => $request->id_feira,
            'id_listaProduto' => $request->id_listaProduto,
            'ativo' => 1,
        ]);

        return redirect()->route('bancas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function show(Banca $banca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function edit(Banca $banca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banca $banca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banca $banca)
    {
        //
    }
}
