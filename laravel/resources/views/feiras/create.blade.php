@extends('templates.main', ['titulo' => "Novo Feira", 'permission' => "App/Models/Feira"])

@section('titulo') Feira @endsection

@section('conteudo')

    <form action="{{ route('feiras.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="text" 
                        class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" 
                        name="endereco" 
                        placeholder="endereco"
                        value="{{old('endereco')}}"
                    />
                    @if($errors->has('mp,e'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('endereco') }}
                        </div>
                    @endif
                    <label for="endereco">Endereço da Feira</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="text" 
                        class="form-control {{ $errors->has('diaSemana') ? 'is-invalid' : '' }}"  
                        name="diaSemana" 
                        placeholder="diaSemana"
                        value="{{old('diaSemana')}}"
                    />
                    @if($errors->has('diaSemana'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('diaSemana') }}
                        </div>
                    @endif
                    <label for="diaSemana">Dias da Semana</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="horario"
                        class="form-control {{ $errors->has('horario') ? 'is-invalid' : '' }}" 
                        name="horario" 
                        placeholder="horario"
                        value="{{old('horario')}}"
                    />
                    @if($errors->has('horario'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('horario') }}
                        </div>
                    @endif
                    <label for="horario">Horario da Feira</label>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <a href="{{route('feiras.index')}}" class="btn btn-secondary btn-block align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                    &nbsp; Voltar
                </a>
                <button type="submit" class="btn btn-success btn-block align-content-center">
                    Confirmar &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                </button>
            </div>
        </div>
    </form>

@endsection