<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Produto", 'rota' => "produtos.create", 'permission' => "App/Models/Produto"] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Produto @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">

            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist
                :title="'produtos'"
                :crud="'produtos'"
                :header="['ID','NOME','']"
                :fields="['id','nome',]"
                :data="$produtos"
                :hide="[true,true,true]"
                :info="['id', 'nome']"
                :remove="'nome'"
            />
        </div>
    </div>

@endsection
