@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $status_movimentacao->id }}</td>
        </tr>     
        <tr>
            <th>Nome</th>
            <td>{{ $status_movimentacao->descricao }}</td>
        </tr>
    </tbody>
</table>
<form method="post" action="{{ route('status_movimentacoes.destroy', ['id', $status_movimentacao->id]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-default">Excluir</button>
    <a class="btn btn-link" href="{{ route('status_movimentacoes.index') }}">Cancelar</a>
</form>
@endsection