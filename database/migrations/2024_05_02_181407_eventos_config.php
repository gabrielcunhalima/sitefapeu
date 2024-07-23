<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos_config', function(Blueprint $table) {
            $table->id();
            
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('eventos');
            
            $table->integer('PagamentoBoleto');
            $table->integer('PagamentoCartao');
            $table->integer('PagamentoPIX');

            $table->integer('ControleVagasModalidade');
            $table->integer('ControleVagasGeral');
            
            $table->integer('QuantidadeParcelas');
            $table->datetime('VencimentoPagamento');

            
            $table->integer('ExibirEvento')->nullable();

            
            $table->string('action')->nullable();
            $table->string('_token');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos_config');
    }
};
