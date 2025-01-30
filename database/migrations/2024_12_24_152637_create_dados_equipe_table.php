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
        Schema::create('dados_equipe', function (Blueprint $table) {
            $table->id('id_equipe');
            $table->string('nome_equipe');
            $table->integer('numero_equipe')->unique();
            $table->string('setor_equipe');
            $table->string('regiao_equipe');
            $table->string('cidade_equipe');
            $table->date('fundacao_equipe');
            $table->integer('ativo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_equipe');
    }
};
