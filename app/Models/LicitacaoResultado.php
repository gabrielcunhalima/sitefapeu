<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LicitacaoResultado extends Model
{
    protected $table = 'licitacao_resultados';

    protected $fillable = [
        'id_licitacao',
        'quantidadeHomologada',
        'valorUnitarioHomologado',
        'valorTotalHomologado',
        'percentualDesconto',
        'tipoPessoaId',
        'niFornecedor',
        'nomeRazaoSocialFornecedor',
        'porteFornecedorId',
        'naturezaJuridicaId',
        'codigoPais',
        'indicadorSubcontratacao',
        'ordemClassificacaoSrp',
        'dataResultado',
        'aplicacaoMargemPreferencia',
        'amparoLegalMargemPreferenciaId',
        'paisOrigemProdutoId',
        'aplicacaoBeneficioMeEpp',
        'aplicacaoCriterioDesempate',
        'amparoLegalCriterioDesempateId',
        'numeroItem'
    ];

    protected $casts = [
        'indicadorSubcontratacao' => 'boolean',
        'aplicacaoMargemPreferencia' => 'boolean',
        'aplicacaoBeneficioMeEpp' => 'boolean',
        'aplicacaoCriterioDesempate' => 'boolean',
        'dataResultado' => 'date',
        'quantidadeHomologada' => 'decimal:4',
        'valorUnitarioHomologado' => 'decimal:4',
        'valorTotalHomologado' => 'decimal:4',
    ];

    public $timestamps = true;

    public function licitacao()
    {
        return $this->belongsTo(Licitacoes::class, 'id_licitacao');
    }
}