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
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
