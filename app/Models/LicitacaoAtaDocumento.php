<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LicitacaoAtaDocumento extends Model
{
    use HasFactory;

    protected $table = 'licitacao_ata_documentos';

    protected $fillable = [
        'id_licitacao_ata',
        'tipoDocumentoId',
        'tituloDocumento',
        'arquivo_local',
        'sequencialDocumento',
        'enviado_pncp',
        'data_envio_pncp'
    ];

    protected $casts = [
        'enviado_pncp' => 'boolean',
        'data_envio_pncp' => 'datetime',
    ];

    public function licitacaoAta()
    {
        return $this->belongsTo(LicitacaoAta::class, 'id_licitacao_ata');
    }

    public function ata()
{
    return $this->licitacaoAta();
}
}