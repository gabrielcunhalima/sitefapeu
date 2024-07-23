<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos_vaga extends Model
{
    use HasFactory;

    
    protected $table = 'eventos_vagas';

    protected $fillable = [
        'id_evento',
        'id_modalidade',
        'quantidade',
        'exigeComprovante',
        'aceitaSubmissao',
        '_token',
        'action',
    ];
}
