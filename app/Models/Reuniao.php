<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    use HasFactory;

    protected $table = 'reunioes';
    
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cargo_instituicao',
        'assunto',
        'descricao',
        'data_reuniao',
        'horario_reuniao',
        'preferencia_contato',
        'status'
    ];
}