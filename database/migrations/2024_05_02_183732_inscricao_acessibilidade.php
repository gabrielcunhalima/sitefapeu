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
        Schema::create('inscricao_acessibilidade', function (Blueprint $table) {
            $table->id();

            $table->integer('id_inscricao')->unsigned();
            $table->foreign('id_inscricao')->references('id')->on('inscricao');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscricao_acessibilidade');
    }
};
