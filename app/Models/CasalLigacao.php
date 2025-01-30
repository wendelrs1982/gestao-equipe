<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CasalLigacao extends Model
{
    protected $table ='casal_ligacao';
    protected $primaryKey = 'id_casal_ligacao';

    protected $fillable = [
        'casal_ligacao',
        'ano',
        'ativo'
    ];

    use SoftDeletes;
    use HasFactory;
}
