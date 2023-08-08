<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Index Feirante", 'rota' => "gerencia.feirante.create", 'permission' => "App/Models/Feirante"] )
<!-- Preenche o conteúdo da seção "titulo" -->

<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">

            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist
                class="datalist"
                :title="''"
                :crud="'feirante'"
                :header="['apelido','telefone','numero de user']"
                :fields="['apelido','telefone','id']"
                :data="$feirante"
                :hide="[false,false,false]"
                :info="['apelido','telefone']"
                :remove="'id'"
                class="datalist"
            />

        </div>
    </div>

@endsection
