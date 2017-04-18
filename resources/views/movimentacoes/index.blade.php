@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Data do registro</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movimentacoes as $movimentacao)
        <tr>
            <td>{{ $movimentacao->id }}</td>
            <td>{{ $movimentacao->descricao }}</td>
            <td>{{ $movimentacao->valor }}</td>
            <td>{{ $movimentacao->data }}</td>
            <td>{{ $movimentacao->data_registro }}</td>
            <td><a class="btn btn-link" href="{{ route('movimentacoes.edit', ['id' => $movimentacao->id]) }}">Editar</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection