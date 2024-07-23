<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('inscricao_acessibilidade', function (Blueprint $table) {
            $table->id();

            $table->integer('id_inscricao')->unsigned();
            $table->foreign('id_inscricao')->references('id')->on('inscricao');

            $table->boolean('auditiva')->default(false);
            $table->boolean('fisica')->default(false);
            $table->boolean('visual')->default(false);
            $table->boolean('intelectual')->default(false);
            $table->boolean('mental')->default(false);
            $table->boolean('outra_def')->default(false);
            $table->string('qual_def')->nullable();
            $table->boolean('acompanhante')->default(false);
            $table->boolean('andador')->default(false);
            $table->boolean('cadeirarodas')->default(false);
            $table->boolean('caoguia')->default(false);
            $table->boolean('leituraorofacial')->default(false);
            $table->boolean('muleta')->default(false);
            $table->boolean('audiodescricao')->default(false);
            $table->boolean('legenda')->default(false);
            $table->boolean('libras')->default(false);
            $table->boolean('lugarcadeirante')->default(false);
            $table->boolean('lugarcaoguia')->default(false);
            $table->boolean('outra_neces')->default(false);
            $table->string('qual_neces')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscricao_acessibilidade');
    }
};
