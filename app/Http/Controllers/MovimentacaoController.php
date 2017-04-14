<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movimentacao;

class MovimentacaoController extends Controller {

    public function index() {
        $movimentacoes = Movimentacao::all();
        return view('movimentacoes/index', ['movimentacoes' => $movimentacoes]);
    }

    public function create() {
        return view('movimentacoes/create');
    }

    public function store(Request $request) {
        $movimentacao = new Movimentacao();
        $movimentacao->descricao = $request->input('descricao');
        $movimentacao->valor = $request->input('valor');
        $movimentacao->data = $request->input('data');
        $movimentacao->data_registro = $request->input('data_registro');
        $movimentacao->save();
        return redirect()->route('movimentacoes.index');
    }

    public function show($id) {
        $movimentacao = Movimentacao::find($id);
        return view('movimentacoes/show', ['movimentacao' => $movimentacao]);
    }

    public function edit($id) {
        $movimentacao = Movimentacao::find($id);
        return view('movimentacoes/edit', ['movimentacao' => $movimentacao]);
    }

    public function update(Request $request, $id) {
        $movimentacao = Movimentacao::find($id);
        $movimentacao->descricao = $request->input('descricao');
        $movimentacao->valor = $request->input('valor');
        $movimentacao->data = $request->input('data');
        $movimentacao->data_registro = $request->input('data_registro');
        $movimentacao->save();
        return redirect()->route('movimentacoes.show', ['id' => $movimentacao->id]);
    }

    public function destroy($id) {
        $movimentacao = Movimentacao::find($id);
        $movimentacao->delete();
        return redirect()->route('movimentacoes.index');
    }

}
