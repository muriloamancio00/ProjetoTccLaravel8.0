<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Sobre o Projeto", 'rota' => "gerencia.sobre.create", 'permission' => "App/Models/Sobre"] )

<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')
    O projeto nasceu em 2022
@endsection
