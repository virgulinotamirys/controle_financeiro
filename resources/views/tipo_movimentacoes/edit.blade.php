@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <form method="post" action="{{ route('tipo_movimentacoes.update', ['id' => $tipo_movimentacao->id]) }}"> 
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-6 form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control " id="nome" name="nome" value="{{ $tipo_movimentacao->nome }}"><br/>
                    <button type="submit" class="btn btn-default">Salvar</button>
                </div>
            </form>
        </div>
@endsection