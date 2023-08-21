<h1>Listagem dos Suportes</h1>

<a href="{{route('suporte.create')}}">Abrir Chamado</a>

<table>
    <thead>
        <th>#</th>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($suportes as $suporte)
            <tr>
                <td>{{$suporte->id}}</td>
                <td>{{$suporte->ds_assunto}}</td>
                <td>{{$suporte->id_status}}</td>
                <td>{{$suporte->ds_texto}}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>