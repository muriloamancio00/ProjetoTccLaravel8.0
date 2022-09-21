<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Feira", 'rota' => "feiras.create", 'permission' => "App/Models/Feira"] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Feira @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist 
                :title="'Feira'"
                :crud="'feiras'"
                :header="['ID','NOME','']" 
                :fields="['id','endereco',]"
                :data="$feiras"
                :hide="[true,true,true]" 
                :info="['id', 'nome']"
                :remove="'nome'"
            />
        </div>
    </div>
@endsection