<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarraqueiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barraqueiro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',250);
            $table->integer('tipo_id')->unsigned()->default(1);
            $table->string('tel',250);
            $table->string('cpf',250);
            $table->string('cidade',250);
            $table->decimal('valor_pago',11,2);
            $table->decimal('valor_receber',11,2);
            $table->decimal('valor_total',11,2);
            $table->string('url_image',255);
            $table->date('dia_pagamento');
            $table->boolean('prazo');
            $table->foreign('tipo_id')->references('id')->on('tipo_servico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barraqueiro');
    }
}
