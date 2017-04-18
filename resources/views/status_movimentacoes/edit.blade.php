@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="post" action="{{ route('status_movimentacoes.update', ['id' => $status_movimentacao->id]) }}"> 
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="col-lg-6 form-group">
            <label>Descrição</label>
            <input type="text" class="form-control " id="descricao" name="descricao" value="{{ $status_movimentacao->descricao }}"><br/>
            <button type="submit" class="btn btn-default">Salvar</button>
            <a class="btn btn-link" href="{{ route('status_movimentacoes.index') }}">Cancelar</a>
        </div>
    </form>
</div>
@endsection