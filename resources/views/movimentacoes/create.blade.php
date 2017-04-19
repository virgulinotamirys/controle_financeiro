@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('movimentacoes.store') }}">
    {{ csrf_field() }}
    <div class="col-lg-6 form-group">
        <label>Descrição</label>
        <input type="text" class="form-control " id="descricao" name="descricao"><br/>
        <label>Valor</label>
        <input type="text" class="form-control " id="valor" name="valor"><br/>
        <label>Data</label>
        <input type="text" class="form-control " id="data" name="data"><br/>
        <label>Data do registro</label>
        <input type="text" class="form-control " id="data_registro" name="data_registro"><br/>
        <button type="submit" class="btn btn-default">Salvar</button>
        <a class="btn btn-link" href="{{ route('movimentacoes.index') }}">Voltar</a>
    </div>
</form>
@endsection