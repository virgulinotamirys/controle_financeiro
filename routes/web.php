<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home','HomeController@index')->middleware('auth');
    Route::resource('tipo_movimentacoes', 'TipoMovimentacaoController');
    Route::resource('status_movimentacao', 'StatusMovimentacaoController');
});