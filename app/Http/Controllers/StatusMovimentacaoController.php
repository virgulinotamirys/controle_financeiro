<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusMovimentacao;

class StatusMovimentacaoController extends Controller
{
   
    public function index()
    {
        $status_movimentacoes = StatusMovimentacao::all();  
        return view('status_movimentacoes/index', ['status_movimentacoes' => $status_movimentacoes]);  
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
