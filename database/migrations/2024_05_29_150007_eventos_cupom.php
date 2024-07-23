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
        Schema::create('eventos_cupom', function (Blueprint $table) {
            $table->id();

            $table->integer('id_evento')->unsigned();
            $table->foreign('id_evento')->references('id')->on('eventos');

            $table->integer('id_formapagamento')->unsigned();
            $table->foreign('id_formapagamento')->references('id')->on('formapagamento');

            $table->string('CodigoCupom');

            $table->datetime('dataInicio');
            $table->datetime('dataFim');

            $table->integer('quantidade');

            $table->double('porcentagem',10,2);

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
        //
    }
};
