<div>

    <table class="table align-middle caption-top table-striped">
        @if($title)
            <caption>Tabela de <b>{{ $title }}</b></caption>
        @endif
        <thead>
        <tr>
            @php $cont=0; @endphp
            @foreach ($header as $item)

                @if($hide[$cont])
                    <th scope="col" class="d-none d-md-table-cell">{{ $item }}</th>
                @else
                    <th scope="col">{{ $item }}</th>
                @endif
                @php $cont++; @endphp

            @endforeach
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    @php $cont=0; @endphp
                    @foreach($fields as $field)
                        @if($hide[$cont])
                            <td  style="margin-top: 20px;border-radius: 5px;padding: 10px;background-color: rgba(139,128,112,0.27);border: 1px solid #dee2e6;" class="d-none d-md-table-cell">{{ $item[$field] }}</td>
                        @else
                            <td>{{ $item[$field] }}</td>
                        @endif
                        @php $cont++; @endphp
                    @endforeach
                    <td>

                </tr>
            @endforeach
        </tbody>
    </table>


</div>
