<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feira;
use App\Models\Banca;
class GerenciaController extends Controller
{

    public function index()
    {

        $this->authorize('viewAny', [Feira::class ,Banca::class]);
        //dd($feiras,$bancas);

        return view('templates.antigo')->with('titulo', "");
    }

    public function indexCarregada(){
        $this->authorize('viewAny', [Feira::class ,Banca::class]);
        $feiras = Feira::all();
        $bancas = Banca::all();
        //dd($feiras);

        return view('inicio',compact('feiras','bancas'))->with('titulo', "");
    }


}
