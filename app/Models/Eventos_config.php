<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos_config extends Model
{
    use HasFactory;

    
    protected $table = 'eventos_config';

    protected $fillable = [
        'id_evento',
        'PagamentoBoleto',
        'PagamentoCartao',
        'PagamentoPIX',
        'QuantidadeParcelas',
        'VencimentoPagamento',
        'ControleVagasModalidade',
        'ControleVagasGeral',
        'dataInicioInscricao',
        '_token',
        'action',
    ];
}
