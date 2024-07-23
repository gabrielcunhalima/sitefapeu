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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->integer('IDProjeto');
            $table->datetime('dataInicioEvento');
            $table->datetime('dataFinalEvento');
            $table->text('Titulo');
            $table->text('Local');
            $table->text('Descricao');
            $table->string('NumConta');
            $table->integer('idrubrica');
            $table->integer('idsubrubrica');
            $table->text('Contato');
            $table->integer('IDCategoriaEvento');
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->integer('EventoOnline');
            $table->integer('Aprovado')->nullable();
            $table->string('CpfResponsavel')->nullable();
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
        Schema::dropIfExists('eventos');
    }
};
