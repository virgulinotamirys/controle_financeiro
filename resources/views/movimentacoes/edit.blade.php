@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="post" action="{{ route('movimentacoes.update', ['id' => $movimentacao->id]) }}"> 
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="col-lg-6 form-group">
            <label>Descrição</label>
            <input type="text" class="form-control " id="descricao" name="descricao" value="{{ $movimentacao->descricao }}"><br/>
             <label>Valor</label>
            <input type="text" class="form-control " id="valor" name="valor" value="{{ $movimentacao->valor }}"><br/>
             <label>Data</label>
            <input type="text" class="form-control " id="data" name="data" value="{{ $movimentacao->data }}"><br/>
             <label>Data do registro</label>
            <input type="text" class="form-control " id="data_registro" name="data_registro" value="{{ $movimentacao->data_registro }}"><br/>
            <button type="submit" class="btn btn-default">Salvar</button>
            <a class="btn btn-link" href="{{ route('movimentacoes.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection