@extends('templates.antigo', ['titulo' => "Novo Feira", 'permission' => "App/Models/Feira"])

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
    @csrf
    <div class="col-7 m-auto">
        <div class="mb-2">
            @csrf
            <input class="form-control" aria-label="default input example"
                   value="{{$feiras->nome ?? 'Feira da Lua'}} "
                   type="text" name="nome" id="nome"
                   placeholder=" {{$feiras->nome ?? 'Nome da Feira'}} ">
            <br/>
            <input class="form-control" aria-label="default input example"
                   value="{{$feiras->endereco ?? 'Endereço da Feira'}} "
                   type="text" name="endereco" id="endereco"
                   placeholder=" {{$feiras->endereco ?? 'Endereço'}} ">
            <br/>
            <input class="form-control" aria-label="default input example"
                   value="{{$feiras->horario ?? 'Horario que ocorre'}} "
                   type="text" name="horario" id="horario"
                   placeholder=" {{$feiras->horario ?? 'Horario'}} ">
            <br/>
            <input class="form-control" aria-label="default input example"
                   value="{{$feiras->diaSemana ?? 'Dias da Semana que ocorre'}} "
                   type="text" name="diaSemana" id="diaSemana"
                   placeholder=" {{$feiras->diaSemana ?? 'Dia da Semana'}} ">
            <br/>
            <div class="text-center">
                <input class="btn btn-primary col-4" type="submit"
                       value="@if(isset($feiras)) Editar @else Cadastrar @endif"/>
            </div>
            <button type="submit" class="btn btn-success btn-block align-content-center">
                Confirmar &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </button>
@endsection
