<?php

namespace App\Http\Controllers;

use App\Models\FeiraModel;
use Illuminate\Http\Request;

class FeiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $this->authorize('viewAny', FeiraModel::class);


        $feiras = FeiraModel::with(['feira__bancas'])->get();

        return view('feiras.index', compact('feiras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $this->authorize('create', FeiraModel::class);

        return view('feiras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->authorize('create', FeiraModel::class);


        $regras = [
            'endereco' => 'required|max:50|min:5',
            'diaSemana' => 'required|max:50|min:5',
            'horario' => 'required|max:20|min:2',
        ];

        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        FeiraModel::create([
            'endereco' => $request->endereco,
            'diaSemana' => $request->diaSemana,
            'horario' => $request->horario,
            'id_Administrador' => 1,
        ]);

        return redirect()->route('feiras.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Http\Response
     */
    public function show(FeiraModel $feiras) {

        $this->authorize('view', $feiras);

        return view('feiras.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Http\Response
     */
    public function edit(FeiraModel $feira) {

        $this->authorize('update', $feira);

        return view('feiras.edit',compact('feira'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeiraModel $feira) {

        $this->authorize('update', $feira);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeiraModel $feira) {

        $this->authorize('delete', $feira);

        return view('feiras.destroy');
    }
}
