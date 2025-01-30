<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MembroEquipe;
use App\Models\TemaDeEstudo;
use App\Models\ConselheiroEquipe;

class Reuniao extends Model
{
    protected $table ='reunioes_equipe';
    protected $primaryKey = 'id_reuniao';

    protected $fillable = [
        'tema_reuniao_id',
        'conselheiro_id',
        'animador_id',
        'anfitriao_id',
        'financeiro_id',
        'data_reuniao',
        'ruptura_reuniao',
        'evangelho_reuniao',
        'salmo_reuniao'
    ];

    public function conselheiro () {
        return $this->belongsTo(ConselheiroEquipe::class, 'conselheiro_id');
    }

    public function animador () {
        return $this->belongsTo(MembroEquipe::class, 'animador_id');
    }

    public function anfitriao () {
        return $this->belongsTo(MembroEquipe::class, 'anfitriao_id');
    }

    public function financeiro () {
        return $this->belongsTo(MembroEquipe::class, 'financeiro_id');
    }

    public function temaDeEstudo () {
        return $this->belongsTo(TemaDeEstudo::class, 'tema_reuniao_id');
    }

    use SoftDeletes;
    use HasFactory;
}
