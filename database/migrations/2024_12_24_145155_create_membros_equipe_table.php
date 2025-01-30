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
        Schema::create('membros_equipe', function (Blueprint $table) {
            $table->id('id_membro');
            $table->string('nome_membro')->unique();
            $table->string('email_ele')->nullable();
            $table->string('email_ela')->nullable();
            $table->string('telefone_ele')->nullable();
            $table->string('telefone_ela')->nullable();
            $table->string('endereco')->nullable();
            $table->date('aniversario_ele')->nullable();
            $table->date('aniversario_ela')->nullable();
            $table->date('aniversario_casamento')->nullable();
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
        Schema::dropIfExists('membros_equipe');
    }
};
