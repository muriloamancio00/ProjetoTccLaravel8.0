<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Index Feiras", 'rota' => "gerencia.feiras.create", 'permission' => "App/Models/Feira"] )
<!-- Preenche o conteúdo da seção "titulo" -->


<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

        <div class="row">
            <div class="col">

                <!-- Utiliza o componente "datalist" criado -->
                <x-datalist
                    class="datalist"
                    :title="''"
                    :crud="'feiras'"
                    :header="['nome','horarios','endereço','dia da semana']"
                    :fields="['nome','horarioFeira_id','endereco','diaSemana_id']"
                    :data="$feiras"
                    :hide="[false,false,false,false,false]"
                    :info="['nome','horarioFeira_id']"
                    :remove="'nome'"
                    class="datalist"
                />

            </div>
        </div>
    </div>



@endsection
