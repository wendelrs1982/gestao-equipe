<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Reuniao;

class TemaDeEstudo extends Model
{
    protected $table ='tema_de_estudo';
    protected $primaryKey = 'id_tema';

    protected $fillable = [
        'id_tema',
        'numero_reuniao',
        'tema_reuniao',
        'ano_tema',
        'ativo'
    ];

    use SoftDeletes;
    use HasFactory;
}
