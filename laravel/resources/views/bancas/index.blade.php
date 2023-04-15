<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.antigo', ['titulo' => "Banca", 'rota' => "gerencia.bancas.create", 'permission' => "App/Models/Banca"] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Feira @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">


            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist
                :title="'Banca'"
                :crud="'bancas'"
                :header="['ID','NOME','Lista de Produto',]"
                :fields="['id','nome','id_listaProduto',]"
                :data="$bancas"
                :hide="[true,true,true]"
                :info="['id', 'nome']"
                :remove="'nome'"
            />
        </div>
    </div>
@endsection
