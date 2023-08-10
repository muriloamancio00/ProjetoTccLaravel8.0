<?php

namespace App\Http\Controllers;

use App\Models\Feira;
use App\Models\Horario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Feira::class,'feiras');
    }
    public function index()
    {
        $feiras = DB::table('feiras')
            ->join('diaSemana', 'feiras.diaSemana_id', '=', 'diaSemana.id')
            ->join('horarios', 'feiras.horarioFeira_id', '=', 'horarios.id') // Junção com a tabela "horarios"
            ->select('feiras.*', 'diaSemana.nome as diaSemanaNome', 'horarios.horario as horarioNome') // Selecionando campos e renomeando
            ->get()
            ->map(function ($feira) {
                return (array) $feira;
            });

        return view('feiras.index', compact('feiras'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $this->authorize('create', Feira::class);

        return view('feiras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$this->authorize('create', Feira::class);

        $regras = [
            'nome' => 'required|max:50|min:5',
            'endereco' => 'required|max:50|min:5',
            'horarioFeira_id' => 'required',
            'diaSemana_id' => 'required',
            'administrador_id' => 'required',
        ];

        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
            "unique" => "Já existe um endereço cadastrado com esse [:attribute]!"
        ];

        $request->validate($regras, $msgs);

        $objFeira =[
            'nome'=>$request->nome,
            'endereco'=>$request->endereco,
            'horarioFeira_id'=>$request->horarioFeira_id,
            'administrador_id'=>$request->administrador_id,
            'diaSemana_id'=>$request->diaSemana_id,
        ];

        if ($request->has('horarioFim')) {
            $objFeira['horarioFim'] = $request->horarioFim;
        }

        if ($request->has('latitude')) {
            $objFeira['latitude'] = $request->latitude;
        }

        if ($request->has('longitude')) {
            $objFeira['longitude'] = $request->longitude;
        }

        Feira::create($objFeira);

        return redirect()->route('feiras.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function show(Feira $feiras) {

        $this->authorize('view', $feiras);

        return view('feiras.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function edit(Feira $feira) {

        $this->authorize('update', $feira);

        return view('feiras.edit',compact('feira'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feira $feira) {

        $this->authorize('update', $feira);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feira $feira) {

        $this->authorize('delete', $feira);

        return view('feiras.destroy');
    }
}
