<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MembroEquipe;
use App\Models\TemaDeEstudo;
use App\Models\ConselheiroEquipe;
use App\Models\CasalLigacao;
use App\Models\DadoEquipe;

class RelatorioReuniao extends Model
{
    protected $table ='relatorio_reuniao';
    protected $primaryKey = 'id_relatorio';

    protected $fillable = [

        'numero_reuniao',
        'tema_reuniao',
        'cre',
        'cl',
        'conselheiro',
        'numero_equipe',
        'setor_equipe',
        'nome_equipe',
        'cidade_equipe',
        'data_reuniao_prep',
        'local_reuniao_prep',
        'participantes_reuniao_prep',
        'data_reuniao_formal',
        'desc_reuniao_formal',
        'inicio_reuniao_formal',
        'fim_reuniao_formal',
        'participantes_reuniao_formal',
        'ausentes_reuniao_formal',
        'desc_refeicao_formal',
        'desc_oracao_formal',
        'desc_partilha_formal',
        'desc_estudo_tema_formal',
        'desc_coparticipacao_formal',
        'contribuicao_equipe',
        'media_contribuicao_equipe',
        'desc_conselheiro_formal',
        'desc_vida_em_equipe',
        'desc_avaliacao_reuniao_formal',
        'vida_casal_extra_equipe',
        'data_proxima_reuniao_formal',
        'local_proxima_reuniao_formal',
        'desc_avisos_setor'
       
    ];

    public function membrosEquipe () {
        return $this->hasMany(MembroEquipe::class);
    }

    public function temaReuniao () {
        return $this->hasOne(TemaDeEstudo::class);
    }

    public function conselheiroEquipe () {
        return $this->hasOne(ConselheiroEquipe::class);
    }

    public function casalLigacao () {
        return $this->hasOne(CasalLigacao::class);
    }

    public function equipe () {
        return $this->hasOne(DadoEquipe::class);
    }

    use SoftDeletes;
    use HasFactory;
}
