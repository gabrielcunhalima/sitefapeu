<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos_cupom extends Model
{
    use HasFactory;

    protected $table = 'Eventos_cupom';


    protected $fillable = [
        'CodigoCupom',
        'id_evento',
        'id_formapagamento',
        'dataInicio',
        'dataFim',
        'id_formapagamento',
        'quantidade',
        'porcentagem',
        '_token',
        'action',
    ];
}
