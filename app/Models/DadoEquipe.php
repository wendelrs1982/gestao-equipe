<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DadoEquipe extends Model
{
    protected $table ='dados_equipe';
    protected $primaryKey = 'id_equipe';

    protected $fillable = [
        'nome_equipe',
        'numero_equipe',
        'setor_equipe',
        'regiao_equipe',
        'cidade_equipe',
        'fundacao_equipe',
        'ativo'
    ];

    use SoftDeletes;
    use HasFactory;
}
