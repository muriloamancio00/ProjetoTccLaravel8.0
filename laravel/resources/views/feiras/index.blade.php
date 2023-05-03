<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.antigo', ['titulo' => "Feira da Economia Murilo Amancio", 'rota' => "gerencia.feiras.create", 'permission' => "App/Models/Feira"] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo')
    Feira
@endsection


<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="" style="border-radius: 10px;margin-top: 10px;padding: 10px;background-color: rgba(12,82,40,0.54)">
        <div class="d-flex flex-row justify-content-between">
            <div class="card text-bg-info mb-3" style="max-width: 18rem;margin-right: 10px">
                <div class="card-header" style="background-color: rgba(148,155,16,0.44)">Header</div>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-bg-info mb-3" style="max-width: 18rem;margin-right: 10px">
                <div class="card-header" style="background-color: rgba(148,155,16,0.44)">Header</div>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-bg-info mb-3" style="max-width: 18rem;margin-right: 10px">
                <div class="card-header" style="background-color: rgba(148,155,16,0.44)">Header</div>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-bg-info mb-3" style="max-width: 18rem;margin-right: 10px">
                <div class="card-header" style="background-color: rgba(148,155,16,0.44)">Header</div>
                <div class="card-body">
                   <!--<x-show :key="2" :items="$feiras" type="feiras"/> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <!-- Utiliza o componente "datalist" criado -->
                <x-datalist
                    class="datalist"
                    :title="'feiras index'"
                    :crud="'feiras'"
                    :header="['nome','horarios','endereço','semanal',]"
                    :fields="['nome','horario','endereco','diaSemana',]"
                    :data="$feiras"
                    :hide="[false,false,false,false,false]"
                    :info="['nome','horarios']"
                    :remove="'nome'"
                    class="datalist"
                >
                            <!-- Deveria dar um estilo para esse datalist -->
                    <style>
                        .datalist {
                            margin-top: 20px;
                            padding: 10px;
                            background-color: #3e8e41;
                            border: 1px solid #dee2e6;
                            border-radius: 5px;
                        }
                    </style>
                </x-datalist>

            </div>
        </div>
    </div>



@endsection
