<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao_acessibilidade extends Model
{
    use HasFactory;
    
    protected $table = 'inscricao_acessibilidade';

    protected $fillable = [
        'id',
        'id_inscricao',
        'auditiva',
        'fisica',
        'visual',
        'intelectual',
        'mental',
        'outra_def',
        'qual_def',
        'acompanhante',
        'andador',
        'cadeirarodas',
        'caoguia',
        'leituraorofacial',
        'muleta',
        'audiodescricao',
        'legenda',
        'libras',
        'lugarcadeirante',
        'lugarcaoguia',
        'outra_neces',
        'qual_neces',
        '_token',
        'action'
    ];
} 
