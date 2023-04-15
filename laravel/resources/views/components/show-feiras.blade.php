<div class="table-responsive">
    <table class="table table-sm table-bordered table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Localização</th>
            <th>Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($feiras as $feira)
            <tr>
                <td>{{ $feira->nome }}</td>
                <td>{{ $feira->localizacao }}</td>
                <td>{{ $feira->data }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@props(['items', 'type'])

@if ($type == 'feiras')
    <h2>Feiras</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $feira)
            <tr>
                <td>{{ $feira['id'] }}</td>
                <td>{{ $feira['nome'] }}</td>
                <td>{{ $feira['endereco'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@elseif ($type == 'bancas')
    <h2>Bancas</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Endereço</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $banca)
            <tr>
                <td>{{ $banca['id'] }}</td>
                <td>{{ $banca['endereco'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif



