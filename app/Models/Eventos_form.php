<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos_form extends Model
{
    use HasFactory;

    protected $table = 'eventos_form';

    protected $fillable = [
        'id_evento',
        'nomeCompleto',
        'cpf',
        'nomeCracha',
        'instituicao',
        'pais',
        'estado',
        'cidade',
        'telefone',
        'dataNascimento',
        'email',
        'escolaridade',
        '_token',
        'action',
    ];
}
