<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Todos os Horarios", 'rota' => "gerencia.horarios.create", 'permission' => "App/Models/Horario"] )
<!-- Preenche o conteúdo da seção "titulo" -->


<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div style="background-color: rgba(212,203,58,0.27);margin-top: 10px;border-radius: 4px" class="col">

            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist
                class="datalist"
                :title="''"
                :crud="'horarios'"
                :header="['ids','horarios cadastrados']"
                :fields="['id','horario']"
                :data="$horarios"
                :hide="[false,false]"
                :info="['id','horario']"
                :remove="'nome'"
                class="datalist"
            >
            </x-datalist>

        </div>
    </div>
    </div>



@endsection
