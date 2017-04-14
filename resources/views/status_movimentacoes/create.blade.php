@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('status_movimentacoes.store') }}">
    {{ csrf_field() }}
    <div class="col-lg-6 form-group">
        <label>Descrição</label>
        <input type="text" class="form-control " id="descricao" name="descricao"><br/>
        <button type="submit" class="btn btn-default">Salvar</button>
    </div>
</form>
@endsection