@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipo_movimentacoes as $tipo_movimentacao)
        <tr>
            <td>{{ $tipo_movimentacao->id }}</td>
            <td>{{ $tipo_movimentacao->nome }}</td>
            <td>
                <a class="btn btn-link" href="{{ route('tipo_movimentacoes.edit', ['id' => $tipo_movimentacao->id]) }}">Editar</a>
                <a class="btn btn-link" href="{{ route('tipo_movimentacoes.update', ['id' => $tipo_movimentacao->id]) }}">Atualizar</a>
                <a class="btn btn-link" href="{{ route('tipo_movimentacoes.destroy', ['id' => $tipo_movimentacao->id]) }}">Excluir</a></td>
        </tr>
        @endforeach
         <a class="btn btn-link" href="{{ route('tipo_movimentacoes.create')}}">Inserir</a>
    </tbody>
</table>
@endsection