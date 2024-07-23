<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Inscricao_deletadas extends Model
{
    use HasFactory;

    protected $table = 'inscricao_deletadas';

    protected $fillable = [
        'nomeCompleto',
        'id_evento',
        'id_modalidade',
        'id_formapagamento',
        'cpf',
        'nomeCracha',
        'instituicao',
        'cidade',
        'uf',
        'pais',
        'telefone',
        'datanascimento',
        'email',
        'escolaridade',
        'transaction_timestamp',
        'StatusPagamento',
        'transaction_id',
        'payment_id',
        '_token',
        'action',
        'concordoLGPD',
        'deletadorPor',
        'deletadoEm'
    ];
}
