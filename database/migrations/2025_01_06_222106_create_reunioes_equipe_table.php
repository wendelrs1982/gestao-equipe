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
        Schema::create('reunioes_equipe', function (Blueprint $table) {
            $table->id('id_reuniao');
            // $table->unsignedBigInteger('tema_reuniao_id');
            $table->foreignId('tema_reuniao_id')->references('id_tema')->on('tema_de_estudo');
            $table->unsignedBigInteger('conselheiro_id');
            $table->unsignedBigInteger('animador_id');
            $table->unsignedBigInteger('anfitriao_id');
            $table->unsignedBigInteger('financeiro_id');
            $table->date('data_reuniao');
            $table->text('ruptura_reuniao');
            $table->text('evangelho_reuniao');
            $table->text('salmo_reuniao');
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('conselheiro_id')->references('id_conselheiro')->on('conselheiro_equipe');
            $table->foreign('animador_id')->references('id_membro')->on('membros_equipe');
            $table->foreign('anfitriao_id')->references('id_membro')->on('membros_equipe');
            $table->foreign('financeiro_id')->references('id_membro')->on('membros_equipe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reunioes_equipe', function(Blueprint $table){
            $table->dropForeignId('tema_reuniao_id');
            $table->dropForeign('conselheiro_id');
            $table->dropForeign('animador_id');
            $table->dropForeign('anfitriao_id');
            $table->dropForeign('financeiro_id');
        });

        Schema::dropIfExists('reunioes_equipe');
    }
};