@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($status_movimentacoes as $status_movimentacao)
        <tr>
            <td>{{ $status_movimentacao->id }}</td>
            <td>{{ $status_movimentacao->descricao }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection