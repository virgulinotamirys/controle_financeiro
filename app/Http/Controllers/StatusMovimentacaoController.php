<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusMovimentacao;

class StatusMovimentacaoController extends Controller {

    public function index() {
        $status_movimentacoes = StatusMovimentacao::all();
        return view('status_movimentacoes/index', ['status_movimentacoes' => $status_movimentacoes]);
    }

    public function create() {
        return view('status_movimentacoes/create');
    }

    public function store(Request $request) {
        $status_movimentacao = new StatusMovimentacao();
        $status_movimentacao->descricao = $request->input('descricao');
        $status_movimentacao->save();
        return redirect()->route('status_movimentacoes.index');
    }

    public function show($id) {
        $status_movimentacao = StatusMovimentacao::find($id);
        return view('status_movimentacoes/show', ['status_movimentacao' => $status_movimentacao]);
    }

    public function edit($id) {
        $status_movimentacao = StatusMovimentacao::find($id);
        return view('status_movimentacoes/edit', ['status_movimentacao' => $status_movimentacao]);
    }

    public function update(Request $request, $id) {
        $status_movimentacao = StatusMovimentacao::find($id);
        $status_movimentacao->descricao = $request->input('descricao');
        $status_movimentacao->save();
        return redirect()->route('status_movimentacoes.show', ['id' => $status_movimentacao->id]);
    }

    public function destroy($id) {
        $status_movimentacao = StatusMovimentacao::find($id);
        $status_movimentacao->delete();
        return redirect()->route('status_movimentacoes.index');
    }

}
