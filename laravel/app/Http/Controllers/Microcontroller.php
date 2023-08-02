<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feira;
use App\Models\Banca;
class Microcontroller extends Controller
{

    public function index()
    {

        //dd($feiras,$bancas);

        return view('templates.main')->with('titulo', "");
    }

    public function indexCarregada(){
        //$this->authorized('viewAny', [Feira::class ,Banca::class]);
        $feiras = Feira::all();
        $bancas = Banca::all();

        return view('inicio',compact('feiras','bancas'))->with('titulo', "");
    }


}
