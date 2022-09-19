<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Administrador", 'rota' => "administradores.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') administradores @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist 
                :title="'administradores'"
                :crud="'administradores'"
                :header="['ID','NOME','']" 
                :fields="['id','nome',]"
                :data="$administradores"
                :hide="[true,true,true]" 
                :info="['id', 'nome']"
                :remove="'nome'"
            />
        </div>
    </div>
@endsection