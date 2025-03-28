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
        Schema::table('admins', function (Blueprint $table) {
            $table->string('imagem')->nullable(); // Adiciona uma coluna para armazenar a imagem
        });
    }
    
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('imagem'); // Remove a coluna se necessário
        });
    }
};
