<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos_lote extends Model
{
    use HasFactory;

    protected $table = 'Eventos_lote';


    protected $fillable = [
        'id_evento',
        'id_modalidade',
        'InicioLote',
        'FimLote',
        'id_formapagamento',
        'quantidade',
        'valor',
        '_token',
        'action',
    ];
}
