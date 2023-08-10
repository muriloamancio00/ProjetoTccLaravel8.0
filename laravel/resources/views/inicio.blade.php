@extends('templates.main', ['titulo' => ""] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('main')
    <div class="card-section">
        <h2>Seção de Funcionalidades Ativas</h2>
        <div class="card-container">
            <div style="width: 1300px; height: 420px;">
                <x-cadastroUser></x-cadastroUser>
            </div>
        </div>
    </div>

    <div class="card-section">
        <h2>Seção de Páginas a Concluir</h2>
        <div class="card-container">
            <div>
                <x-cadastros></x-cadastros>
            </div>
        </div>
        </div>
@endsection
