<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensCompra extends Model
{
    protected $table = 'licitacao_itens';

    protected $fillable = [
        'id_licitacao',
        'numeroItem',
        'materialOuServico',
        'criterioJulgamentoId',
        'tipoBeneficioId',
        'incentivoProdutivoBasico',
        'quantidade',
        'descricao',
        'unidadeMedida',
        'orcamentoSigiloso',
        'valorUnitarioEstimado',
        'valorTotal',
        'aplicabilidadeMargemPreferenciaNormal',
        'aplicabilidadeMargemPreferenciaAdicional',
        'percentualMargemPreferenciaNormal',
        'percentualMargemPreferenciaAdicional',
        'justificativaPresencial'
    ];

    protected $casts = [
        'incentivoProdutivoBasico' => 'boolean',
        'orcamentoSigiloso' => 'boolean',
        'aplicabilidadeMargemPreferenciaNormal' => 'boolean',
        'aplicabilidadeMargemPreferenciaAdicional' => 'boolean',
        'quantidade' => 'decimal:4',
        'valorUnitarioEstimado' => 'decimal:4',
        'valorTotal' => 'decimal:4',
    ];

    public $timestamps = true;

    public function licitacao()
    {
        return $this->belongsTo(Licitacoes::class, 'id_licitacao');
    }
}