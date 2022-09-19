<?php

namespace App\Http\Controllers;

use App\Models\Feira;
use Illuminate\Http\Request;

class FeiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $this->authorize('viewAny', Feira::class);

        $feiras = Feira::all();

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
    public function store(Request $request) {
         
        $this->authorize('create', Feira::class);
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

        return view('feiras.edit');
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
