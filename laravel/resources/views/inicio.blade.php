@extends('templates.main', ['titulo' => "Gerenciamento de Murilo Amancio"] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('main')

    <div style="background-color:#6b7280;border-radius: 4px">
        <x-cadastroUser></x-cadastroUser>
    </div>

    <div style="background-color:#6b7280;border-radius: 4px">
        <x-cadastros></x-cadastros>
    </div>

@endsection
