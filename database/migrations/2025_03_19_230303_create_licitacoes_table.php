<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->id();
            $table->integer('ordem')->nullable();
            $table->string('processo')->nullable();
            $table->string('orgao')->nullable();
            $table->string('projeto')->nullable();
            $table->string('licitacao')->nullable();
            $table->date('dataabertura')->nullable();
            $table->text('objeto')->nullable();
            $table->string('ataabertura')->nullable();
            $table->string('contratoconvenio')->nullable(); 
            $table->string('resultado')->nullable(); 
            $table->date('datapublicacao')->nullable(); 
            $table->string('tipo_licitacao')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitacoes');
    }
};
