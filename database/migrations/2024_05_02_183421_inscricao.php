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
        Schema::create('inscricao', function (Blueprint $table) {
            $table->id();
            
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('eventos');

            $table->integer('id_modalidade')->unsigned();
            $table->foreign('id_modalidade')->references('id')->on('modalidade');
            
            $table->integer('id_formapagamento')->unsigned();
            $table->foreign('id_formapagamento')->references('id')->on('formapagamento');

            $table->string('cpf');
            $table->string('nomeCompleto');
            $table->string('nomeCracha');

            $table->string('instituicao');
            $table->string('cidade');
            $table->string('uf');
            $table->string('pais');
            $table->string('telefone');
            $table->string('datanascimento');
            $table->string('email');
            $table->string('escolaridade');

            $table->string('Cupom')->nullable();
            
            $table->integer('StatusPagamento')->nullable();
            $table->string('ArqRetorno')->nullable();
            $table->string('UsuarioRespBaixa')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('transaction_timestamp')->nullable();
            
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
        Schema::dropIfExists('inscricao');
    }
};
