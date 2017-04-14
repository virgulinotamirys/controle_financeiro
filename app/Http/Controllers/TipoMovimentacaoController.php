<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMovimentacao;


class TipoMovimentacaoController extends Controller
{
   
    public function index()
    {
        //2º passo
        //retorna todas as entidas da tabela do BD (coleção de registros)
        $tipo_movimentacoes = TipoMovimentacao::all();  
        // O segundo parametro aceita um array nomeado,diz que estou passando para a view que está sendo renderizada
        // uma chamada de 'tipo_movimentacoes' que ira conter uma colecao que é armazenada na variavel $tipo_movimentacoes.
        // Que de dentro da view posso acessar a coleção atraves da variavel 'tipo_movimentaoes'.
        return view('tipo_movimentacoes/index', ['tipo_movimentacoes' => $tipo_movimentacoes]);  
    }

    
    public function create()
    {
        return view('tipo_movimentacoes/create');
    }

   
    public function store(Request $request)
    {
        $tipo_movimentacao = new TipoMovimentacao();
        $tipo_movimentacao->nome = $request->input('nome');
        $tipo_movimentacao->save();
        return redirect()->route('tipo_movimentacoes.index');
    }

   
    public function show($id)
    {
        $tipo_movimentacao = TipoMovimentacao::find($id);
        return view('tipo_movimentacoes/show', ['tipo_movimentacao' => $tipo_movimentacao]); 
    }

    
    public function edit($id)
    {
        $tipo_movimentacao = TipoMovimentacao::find($id);
        return view('tipo_movimentacoes/edit', ['tipo_movimentacao' => $tipo_movimentacao]);
    }

  
    public function update(Request $request, $id)
    {
        $tipo_movimentacao = TipoMovimentacao::find($id);
        $tipo_movimentacao->nome = $request->input('nome');
        $tipo_movimentacao->save();
        return redirect()->route('tipo_movimentacoes.show', ['id' => $tipo_movimentacao->id]);
    }

   
    public function destroy($id)
    {
        $tipo_movimentacao = TipoMovimentacao::find($id);
        $tipo_movimentacao->delete();
        return redirect()->route('tipo_movimentacoes.index');
    }
}
