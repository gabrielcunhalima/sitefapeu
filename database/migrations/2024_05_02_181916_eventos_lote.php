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
        Schema::create('eventos_lote', function (Blueprint $table) {
            $table->id();
            
            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('eventos');

            $table->integer('id_modalidade')->unsigned();
            $table->foreign('id_modalidade')->references('id')->on('modalidade');

            

            $table->datetime('InicioLote');
            $table->datetime('FimLote');

            // $table->integer('id_formapagamento')->unsigned();
            // $table->foreign('id_formapagamento')->references('id')->on('formapagamento');

            $table->double('valor',10,2);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos_lote');
    }
};
