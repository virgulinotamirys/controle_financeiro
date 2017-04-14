@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $tipo_movimentacao->id }}</td>
        </tr>     
        <tr>
            <th>Nome</th>
            <td>{{ $tipo_movimentacao->nome }}</td>
        </tr>
    </tbody>
</table>
<form method="post" action="{{ route('tipo_movimentacoes.destroy', ['id', $tipo_movimentacao->id]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-default">Excluir</button>
</form>
@endsection