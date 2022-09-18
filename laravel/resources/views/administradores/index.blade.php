@extends('templates.mainTrab', [ 'titulo' => "Administradores", 'rota' => "administradores.create"])



    <td>
        <td>Todos Administradores</td>

        @can('update', $item)
            <a href= "{{ route('administradores.edit', $item) }}" class="btn btn-success" > 
                ...
            </a>
        @endcan

        @can('view', $item)
            <a href= "{{ route('administradores.show', $item) }}" class="btn btn-primary">
                ...
            </a>
        @endcan

    </td>



