@props(['items', 'type'])

<style>
    /* Define a classe "hidden" para ocultar as linhas da tabela */
    .hidden {
        display: none;
    }

    /* Define a classe "fade-in" para adicionar uma animação de fade-in */
    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }

    /* Define a animação de fade-in */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

@if ($type == 'feiras')
    <h2>Feiras</h2>
    <table class="table table-sm table-bordered table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Horário</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $key => $feira)
            <tr class="{{ $key >= 3 ? 'hidden' : '' }}">
                <td>{{ $feira['nome'] }}</td>
                <td>{{ $feira['endereco'] }}</td>
                <td>{{ $feira['horario'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center mt-3">
        <button id="show-more" class="btn btn-primary">Mostrar mais</button>
    </div>

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
        @foreach ($items as $key => $banca)
            <tr class="{{ $key >= 3 ? 'hidden' : '' }}">
                <td>{{ $banca['id'] }}</td>
                <td>{{ $banca['endereco'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center mt-3">
        <button id="show-more" class="btn btn-primary">Mostrar mais</button>
    </div>
@endif

<script>
    var showMoreButton = document.getElementById('show-more');
    var rows = document.querySelectorAll('tr');

    showMoreButton.addEventListener('click', function () {
        rows.forEach(function (row, index) {
            if (index >= 3) {
                row.classList.toggle('hidden');
                row.classList.toggle('fade-in');
            }
        });

        showMoreButton.textContent = (showMoreButton.textContent === 'Mostrar mais') ? 'Mostrar menos' : 'Mostrar mais';
    });
</script>
