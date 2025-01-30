<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Reuniao;

class MembroEquipe extends Model
{
    protected $table ='membros_equipe';
    protected $primaryKey = 'id_membro';

    protected $fillable = [
        'nome_membro',
        'email_ele',
        'email_ela',
        'telefone_ele',
        'telefone_ela',
        'endereco',
        'aniversario_ele',
        'aniversario_ela',
        'aniversario_casamento',
        'chegada_equipe',
        'saida_equipe',
        'ativo'
    ];

   

    use SoftDeletes;
    use HasFactory;
}
