<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LicitacaoAta extends Model
{
    use HasFactory;

    protected $table = 'licitacao_atas';

    protected $fillable = [
        'id_licitacao',
        'numeroAtaRegistroPreco',
        'anoAta',
        'dataAssinatura',
        'sequencialAta', 
        'dataVigenciaInicio',
        'dataVigenciaFim'
    ];

    protected $casts = [
        'dataAssinatura' => 'date',
        'dataVigenciaInicio' => 'date',
        'dataVigenciaFim' => 'date',
    ];

    protected $dates = [
        'dataAssinatura',
        'dataVigenciaInicio', 
        'dataVigenciaFim',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;

    public function licitacao()
    {
        return $this->belongsTo(Licitacoes::class, 'id_licitacao', 'id');
    }

  
    public function documentos()
{
    return $this->hasMany(LicitacaoAtaDocumento::class, 'id_licitacao_ata');
}
}