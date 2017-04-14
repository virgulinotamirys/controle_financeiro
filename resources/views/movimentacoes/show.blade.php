@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $movimentacao->id }}</td>
        </tr>     
        <tr>
            <th>Descrição</th>
            <td>{{ $movimentacao->descricao }}</td>
        </tr>
        
        <tr>
            <th>Valor</th>
            <td>{{ $movimentacao->valor }}</td>
        </tr>
        
        <tr>
            <th>Data</th>
            <td>{{ $movimentacao->data }}</td>
        </tr>
        
        <tr>
            <th>Data do registro</th>
            <td>{{ $movimentacao->data_registro }}</td>
        </tr>
    </tbody>
</table>
<form method="post" action="{{ route('movimentacoes.destroy', ['id', $movimentacao->id]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-default">Excluir</button>
</form>
@endsection