@extends('templates.main', ['titulo' => "Nova Feira", 'permission' => "App/Models/Feira"])

@section('titulo')
    Feira
@endsection

@section('conteudo')

    <div class="shadow p-3 mb-4 border border-5">
        <h2 class="text-center mt-2">@if(isset($feiras))
                Editar Feira
            @else
                Tela de Cadastro
            @endif</h2>
    </div>

    @if(isset($feiras))
        @method('PUT')
    @else
    @endif


    <div class="container mt-4" style="padding: 11px;background-color:#6b7280;border-radius: 2%">
        <form method="post" action="{{route('feiras.store')}}">
            @csrf
            <div class="row mb-3"> {{-- nome --}}
                <div class="col-md-3">
                    <label style="color: #1a202c" for="nome" class="form-label">Nome:</label>
                </div>
                <div class="col-md-3">
                    <input class="form-control" aria-label="Nome da Feira"
                           value="{{ isset($feiras) ? $feiras->nome : '' }}"
                           type="text" name="nome" id="nome"
                           placeholder="{{ isset($feiras) ? '' : 'Nome da Feira' }}">
                </div>

                <div class="col-md-3"> {{-- endereco --}}
                    <label for="endereco" class="form-label">Endereço:</label>
                </div>
                <div class="col-md-3">
                    <input class="form-control" aria-label="Endereço da Feira"
                           value="{{ isset($feiras) ? $feiras->endereco : '' }}"
                           type="text" name="endereco" id="endereco"
                           placeholder="{{ isset($feiras) ? '' : 'Endereço da Feira' }}">
                </div>
            </div>

            <div class="row mb-3"> {{-- diaSemana_id --}}
                <div class="col-md-3">
                    <label for="diaSemana_id" class="form-label">Dia da Semana:</label>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                    <span class="input-group-text" style="background-color: #4a5568">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                        <select class="form-select" aria-label="Dia da Semana da Feira" name="diaSemana_id" id="diaSemana_id">
                            <option value="" disabled selected>Escolha o Dia da Semana</option>
                            <option value="1" {{ isset($feiras) && $feiras->diaSemana_id == 1 ? 'selected' : '' }}>Segunda-feira</option>
                            <option value="2" {{ isset($feiras) && $feiras->diaSemana_id == 2 ? 'selected' : '' }}>Terca-feira</option>
                            <option value="3" {{ isset($feiras) && $feiras->diaSemana_id == 3 ? 'selected' : '' }}>Quarta-feira</option>
                            <option value="4" {{ isset($feiras) && $feiras->diaSemana_id == 4 ? 'selected' : '' }}>Quinta-feira</option>
                            <option value="5" {{ isset($feiras) && $feiras->diaSemana_id == 5 ? 'selected' : '' }}>Sexta-feira</option>
                            <option value="6" {{ isset($feiras) && $feiras->diaSemana_id == 6 ? 'selected' : '' }}>Sabado</option>
                            <option value="7" {{ isset($feiras) && $feiras->diaSemana_id == 7 ? 'selected' : '' }}>Domingo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3"> {{-- horarioFeira_id --}}
                    <label for="horarioFeira_id" class="form-label">Horario da Feira:</label>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                    <span class="input-group-text" style="background-color: #4a5568">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                        <select class="form-select" aria-label="Horario da Feira" name="horarioFeira_id" id="horarioFeira_id">
                            <option value="" disabled selected>Escolha o Dia da Semana</option>
                            <option value="1" {{ isset($feiras) && $feiras->horarioFeira_id == 1 ? 'selected' : '' }}>10:00</option>
                            <option value="2" {{ isset($feiras) && $feiras->horarioFeira_id == 2 ? 'selected' : '' }}>10:30</option>
                            <option value="3" {{ isset($feiras) && $feiras->horarioFeira_id == 3 ? 'selected' : '' }}>11:00</option>
                            <option value="4" {{ isset($feiras) && $feiras->horarioFeira_id == 4 ? 'selected' : '' }}>11:30</option>
                            <option value="5" {{ isset($feiras) && $feiras->horarioFeira_id == 5 ? 'selected' : '' }}>12:00</option>
                            <option value="6" {{ isset($feiras) && $feiras->horarioFeira_id == 6 ? 'selected' : '' }}>12:30</option>
                            <option value="7" {{ isset($feiras) && $feiras->horarioFeira_id == 7 ? 'selected' : '' }}>13:00</option>
                            <option value="8" {{ isset($feiras) && $feiras->horarioFeira_id == 8 ? 'selected' : '' }}>13:30</option>
                            <option value="9" {{ isset($feiras) && $feiras->horarioFeira_id == 9 ? 'selected' : '' }}>14:00</option>
                            <option value="10" {{ isset($feiras) && $feiras->horarioFeira_id == 10 ? 'selected' : '' }}>14:30</option>
                            <option value="11" {{ isset($feiras) && $feiras->horarioFeira_id == 11 ? 'selected' : '' }}>15:00</option>
                            <option value="12" {{ isset($feiras) && $feiras->horarioFeira_id == 12 ? 'selected' : '' }}>15:30</option>
                            <option value="13" {{ isset($feiras) && $feiras->horarioFeira_id == 13 ? 'selected' : '' }}>16:00</option>
                            <option value="14" {{ isset($feiras) && $feiras->horarioFeira_id == 14 ? 'selected' : '' }}>16:30</option>
                            <option value="15" {{ isset($feiras) && $feiras->horarioFeira_id == 15 ? 'selected' : '' }}>17:00</option>
                            <option value="16" {{ isset($feiras) && $feiras->horarioFeira_id == 16 ? 'selected' : '' }}>17:30</option>
                            <option value="17" {{ isset($feiras) && $feiras->horarioFeira_id == 17 ? 'selected' : '' }}>18:00</option>
                            <option value="18" {{ isset($feiras) && $feiras->horarioFeira_id == 18 ? 'selected' : '' }}>18:30</option>
                            <option value="19" {{ isset($feiras) && $feiras->horarioFeira_id == 19 ? 'selected' : '' }}>19:00</option>
                            <option value="20" {{ isset($feiras) && $feiras->horarioFeira_id == 20 ? 'selected' : '' }}>19:30</option>
                            <option value="21" {{ isset($feiras) && $feiras->horarioFeira_id == 21 ? 'selected' : '' }}>20:00</option>
                            <option value="22" {{ isset($feiras) && $feiras->horarioFeira_id == 22 ? 'selected' : '' }}>20:30</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row mb-3"> {{-- administrador_id --}}
                <div class="col-md-3">
                    <label for="administrador_id" class="form-label">ID Administrador Logado:</label>
                </div>
                <div class="col-md-3">
                    <input class="form-control" aria-label="ID Administrador"
                           value=1
                           type="text" name="administrador_id" id="administrador_id"
                           placeholder="{{ isset($feiras) ? '' : 'administrador_id' }}">
                </div>

            </div>

            <div class="col-md-6">
                <label style="background-color: #98C1D9; padding: 10px; border-radius: 5px; display: block; " for="novoCampo">Opcionais:</label>
                <div class="row form-group justify-content-center">
                    <div class="col-md-4 campo-form">
                        <label for="longitude">Longitude:</label>
                        <input class="form-control" aria-label="longitude"
                               value="{{ isset($feiras) ? $feiras->longitude : '' }}"
                               type="text" name="longitude" id="longitude"
                               placeholder="{{ isset($feiras) ? '' : 'longitude' }}">
                    </div>
                    <div class="col-md-4 campo-form">
                        <label for="latitude">Latitude:</label>
                        <input class="form-control" aria-label="latitude"
                               value="{{ isset($feiras) ? $feiras->latitude : '' }}"
                               type="text" name="latitude" id="latitude"
                               placeholder="{{ isset($feiras) ? '' : 'latitude' }}">
                    </div>
                    <div class="col-md-4 campo-form">
                        <label for="horarioFim">Horário Fim:</label>
                        <input class="form-control" aria-label="horarioFim"
                               value="{{ isset($feiras) ? $feiras->horarioFim : '' }}"
                               type="text" name="horarioFim" id="horarioFim"
                               placeholder="{{ isset($feiras) ? '' : 'horarioFim' }}">
                    </div>

                </div>
            </div>

            <div class="text-center" style="margin-top: 10px">
                <input class="btn btn-primary col-4" type="submit"
                       value="@if(isset($feiras)) Editar @else Cadastrar @endif" />
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </div>
        </form>


    </div>

@endsection

<!-- Novo conjunto de inputs ao lado direito
                <div class="col-md-3">
                    <input class="form-control" aria-label="Novo Campo"
                           value="{{ isset($feiras) ? $feiras->novoCampo : '' }}"
                           type="text" name="novoCampo" id="novoCampo"
                           placeholder="{{ isset($feiras) ? '' : 'Novo Campo' }}">
                </div>

                -->
<!-- Mais campos ou botões aqui -->
