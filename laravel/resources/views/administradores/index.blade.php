@extends('templates.middleware', [

    'titulo' => "Administradores",

    'rota' => "administradores.index",

    'permission' => $permissions['administradores.create']

])

<td>Todos Administradores</td>

<td class="d-none d-md-table-cell">ENSINO MÉDIO INTEGRADO</td>

<td>
    @if(UserPermissions::isAuthorized('administradores.create'))
        <a href= "{{ route('administradores.create', '1') }}" class="btn btn-success">
       
        </a>
    @endif

    @if(UserPermissions::isAuthorized('administradores.show'))
        <a href= "{{ route('administradores.show', '1') }}" class="btn btn-primary">
        
        </a>
    @endif

</td>
        
@if(isset($rota) && $permission)
    <div class="col d-flex justify-content-end">
        <a href= "{{ route($rota) }}" class="btn btn-secondary">
       
        </a>
    </div>
@endif
