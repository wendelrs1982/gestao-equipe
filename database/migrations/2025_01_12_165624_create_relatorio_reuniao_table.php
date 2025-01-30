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
        Schema::create('relatorio_reuniao', function (Blueprint $table) {
            $table->id('id_relatorio');
            $table->integer('numero_reuniao')->nullable();
            $table->string('tema_reuniao')->unique()->nullable();
            $table->string('cre')->nullable();
            $table->string('cl')->nullable();
            $table->string('conselheiro')->nullable();
            $table->integer('numero_equipe')->nullable();
            $table->string('setor_equipe')->nullable();
            $table->string('nome_equipe')->nullable();
            $table->string('cidade_equipe')->nullable();
            $table->date('data_reuniao_prep')->nullable();
            $table->string('local_reuniao_prep')->nullable();
            $table->text('participantes_reuniao_prep')->nullable();
            $table->date('data_reuniao_formal')->nullable();
            $table->text('desc_reuniao_formal')->nullable();
            $table->text('inicio_reuniao_formal')->nullable();
            $table->text('fim_reuniao_formal')->nullable();
            $table->text('participantes_reuniao_formal')->nullable();
            $table->text('ausentes_reuniao_formal')->nullable();
            $table->text('desc_refeicao_formal')->nullable();
            $table->text('desc_oracao_formal')->nullable();
            $table->text('desc_partilha_formal')->nullable();
            $table->text('desc_estudo_tema_formal')->nullable();
            $table->text('desc_coparticipacao_formal')->nullable();
            $table->decimal('contribuicao_equipe', 10, 2)->default(0);
            $table->decimal('media_contribuicao_equipe', 10, 2)->default(0);
            $table->text('desc_conselheiro_formal')->nullable();
            $table->text('desc_vida_em_equipe')->nullable();
            $table->text('desc_avaliacao_reuniao_formal')->nullable();
            $table->text('vida_casal_extra_equipe')->nullable();
            $table->date('data_proxima_reuniao_formal')->nullable();
            $table->string('local_proxima_reuniao_formal')->nullable();
            $table->text('desc_avisos_setor')->nullable();

            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatorio_reuniao');
    }
};