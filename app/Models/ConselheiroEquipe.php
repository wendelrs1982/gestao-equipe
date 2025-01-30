<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConselheiroEquipe extends Model
{
    protected $table ='conselheiro_equipe';
    protected $primaryKey = 'id_conselheiro';

    protected $fillable = [
        'nome_cons',
        'email_cons',
        'telefone_cons',
        'endereco_cons',
        'aniversario_cons',
        'ordenacao_cons',
        'chegada_equipe',
        'saida_equipe',
        'ativo'
    ];

    use SoftDeletes;
    use HasFactory;
}
