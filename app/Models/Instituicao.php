<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;

    protected $table = 'instituicoes';

    protected $fillable = [
        'nome',
        'sigla'
    ];

    public function solicitacoesRessarcimento()
    {
        return $this->hasMany(SolicitacaoRessarcimento::class);
    }
}