@extends('templates.antigo', ['titulo' => "Gerenciamento de Murilo Amancio"] )
<!-- Preenche o conteúdo da seção "titulo" -->
@section('main')
    <div class="container">
        <h1>Minhas Feiras</h1>
        <x-show :items="$feiras" type="feiras"/>
    </div>
@endsection
