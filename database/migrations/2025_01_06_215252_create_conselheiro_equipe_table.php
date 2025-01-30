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
        Schema::create('conselheiro_equipe', function (Blueprint $table) {
            $table->id('id_conselheiro');
            $table->string('nome_cons')->unique();
            $table->string('email_cons')->nullable();
            $table->string('telefone_cons')->nullable();
            $table->string('endereco_cons')->nullable();
            $table->date('aniversario_cons')->nullable();
            $table->date('ordenacao_cons')->nullable();
            $table->date('chegada_equipe')->nullable();
            $table->date('saida_equipe')->nullable();
            $table->integer('ativo')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conselheiro_equipe');
    }
};
