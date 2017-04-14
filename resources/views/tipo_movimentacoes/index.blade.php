@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipo_movimentacoes as $tipo_movimentacao)
        <tr>
            <td>{{ $tipo_movimentacao->id }}</td>
            <td>{{ $tipo_movimentacao->nome }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection