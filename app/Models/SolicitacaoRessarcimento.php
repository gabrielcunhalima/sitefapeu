<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoRessarcimento extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes_ressarcimento';

    protected $fillable = [
        'nome_projeto',
        'nome_coordenador',
        'vigencia_meses',
        'nome_financiador',
        'num_parcelas',
        'planilha_orcamentaria',
        'nome_solicitante',
        'contato',
        'instituicao_id',
        'status',
        'observacoes'
    ];

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class);
    }
}