<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licitacoes extends Model
{
    protected $table = 'licitacoes';

    protected $fillable = [
        'ordem',
        'processo',
        'orgao',
        'orgao_site',
        'projeto',
        'licitacao',
        'dataabertura',
        'objetoCompra',
        'ataabertura',
        'contratoconvenio',
        'resultado',
        'datapublicacao',
        'tipo_licitacao',
        //'cnpj',
        'titulo_documento',
        'tipo_documento_id',
        'codigoUnidadeCompradora',
        'modalidadeId',
        'modoDisputaId',
        'numeroCompra',
        'AnoCompra',
        'srp',
        'dataAberturaProposta',
        'dataEncerramentoProposta',
        'amparoLegalId',
        'tipoInstrumentoConvocatorioId',
        'numeroProcesso',
        'sequencial',
        'somente_site',

    ];

    public $timestamps = true;

    public static function findOrCreate($id)
    {
        return $id ? self::findOrFail($id) : new self();
    }

     public function itensCompra()
    {
        return $this->hasMany(ItensCompra::class, 'id_licitacao', 'id');
    }
}