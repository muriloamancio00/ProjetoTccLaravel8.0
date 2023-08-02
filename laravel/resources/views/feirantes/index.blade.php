@extends('templates.main', [

    'titulo' => "Feirates",

    'rota' => "feirantes.index",

    'permission' => $permissions['feirantes.create']

])

<td>
    <td>Todos Feirantes</td>

    <td class="d-none d-md-table-cell">ENSINO MÉDIO INTEGRADO</td>

    @if(UserPermissions::isAuthorized('feirantes.create'))
        <a href= "{{ route('feirantes.create', '1') }}" class="btn btn-success">

        </a>
    @endif

    @if(UserPermissions::isAuthorized('feirantes.show'))
        <a href= "{{ route('feirantes.show', '1') }}" class="btn btn-primary">

        </a>
    @endif

</td>
