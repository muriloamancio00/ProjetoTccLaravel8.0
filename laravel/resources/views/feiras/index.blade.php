<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Feira da Economia Murilo Amancio", 'rota' => "gerencia.feiras.create", 'permission' => "App/Models/Feira"] )
<!-- Preenche o conteúdo da seção "titulo" -->


<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

        <div class="row">
            <div style="background-color: rgba(212,203,58,0.27);margin-top: 10px;border-radius: 2%" class="col">

                <!-- Utiliza o componente "datalist" criado -->
                <x-datalist
                    class="datalist"
                    :title="'feiras index'"
                    :crud="'feiras'"
                    :header="['nome','horarios','endereço','dia da semana']"
                    :fields="['nome','horarioFeira_id','endereco','horarioFeira_id']"
                    :data="$feiras"
                    :hide="[false,false,false,false,false]"
                    :info="['nome','horarioFeira_id']"
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
