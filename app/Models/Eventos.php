<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $fillable = [
        'IDProjeto',
        'dataInicioEvento',
        'dataFinalEvento',
        'Titulo',
        'Local',
        'Descricao',
        'NumConta',
        'IDRubrica',
        'IDSubRubrica',
        'Contato',
        'id_categoriaevento',
        'EventoOnline',
        'imgCapa',
        'instagram',
        'twitter',
        'youtube',
        'tiktok',
        '_token',
        'TotalVagasGeral',
        'action'
    ];
}
