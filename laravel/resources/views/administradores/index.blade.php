<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Administrador Index", 'rota' => "administradores.create"])
<!-- Preenche o conteúdo da seção "titulo" -->

<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')
    <div class="row">
        <div class="col">
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist
                class="datalist"
                :title="''"
                :crud="'administrador'"
                :header="['apelido','telefone','numero de user']"
                :fields="['apelido','telefone','id']"
                :data="$administradores"
                :hide="[false,false,false]"
                :info="['apelido','telefone']"
                :remove="'id'"
                class="datalist"
            />
        </div>
    </div>
@endsection

