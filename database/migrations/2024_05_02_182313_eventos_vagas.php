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
        Schema::create('eventos_vagas', function (Blueprint $table) {
            $table->id();

            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('eventos');

            $table->integer('id_modalidade')->unsigned();
            $table->foreign('id_modalidade')->references('id')->on('modalidade');

            $table->integer('quantidade');

            $table->integer('exigeComprovante')->nullable();
            $table->integer('aceitaSubmissao')->nullable();
            
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
        Schema::dropIfExists('eventos_vagas');
    }
};
