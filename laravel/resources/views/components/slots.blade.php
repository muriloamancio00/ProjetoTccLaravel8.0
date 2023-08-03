<!-- resources/views/components/slots.blade.php -->
<div>
    <table class="table align-middle caption-top table-striped">
        <caption>Tabela de <b>{{ $title }}</b></caption>
        <thead>
        <tr>
            @foreach ($header as $item)
                <th>{{ $item }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        {{ $slot }}
        </tbody>
    </table>
</div>
