<?php

namespace App\Http\Controllers;

use App\Models\BancaModel;
use App\Models\FeiraModel;
use App\Models\ListaProdutoModel;
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
        $this->authorize('viewAny', BancaModel::class);

        $bancas = BancaModel::with(['feira__bancas'])->get();

        //$bancas = Banca::all();

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

        $this->authorize('create', BancaModel::class);

        $feiras = FeiraModel::orderBy('id')->get();

        $listas = ListaProdutoModel::orderBy('id')->get();

        return view('bancas.create', compact(['feiras','listas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->authorize('create', BancaModel::class);


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

        BancaModel::create([
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
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Http\Response
     */
    public function show(BancaModel $banca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Http\Response
     */
    public function edit(BancaModel $banca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BancaModel $banca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Http\Response
     */
    public function destroy(BancaModel $banca)
    {
        //
    }
}
