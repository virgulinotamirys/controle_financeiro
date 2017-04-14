@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('tipo_movimentacoes.store') }}">
    {{ csrf_field() }}
    <div class="col-lg-6 form-group">
        <label>Nome</label>
        <input type="text" class="form-control " id="nome" name="nome"><br/>
        <button type="submit" class="btn btn-default">Salvar</button>
    </div>
</form>
@endsection