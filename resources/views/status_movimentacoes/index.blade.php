@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($status_movimentacoes as $status_movimentacao)
        <tr>
            <td>{{ $status_movimentacao->id }}</td>
            <td>{{ $status_movimentacao->descricao }}</td>
            <td><a class="btn btn-link" href="{{ route('status_movimentacoes.edit', ['id' => $status_movimentacao->id]) }}">Editar</a>
            <a class="btn btn-link" href="{{ route('status_movimentacoes.update', ['id' => $status_movimentacao->id]) }}">Atualizar</a>
            <a class="btn btn-link" href="{{ route('status_movimentacoes.destroy', ['id' => $status_movimentacao->id]) }}">Excluir</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection