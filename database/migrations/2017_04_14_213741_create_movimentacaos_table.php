<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimentacaosTable extends Migration
{
 
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->double('valor');
            $table->date('data');
            $table->date('data_registro');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimentacoes');
    }
}
