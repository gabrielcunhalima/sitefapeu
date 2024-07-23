<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoordenadorController extends Controller
{

    public function painel() {  
        $dados = Auth::user();
        return view('admin/coord/menucoord',compact('dados'));
    }

    public function meusEventos() {
        $dados = Auth::user();
        $cpfResp = $dados->cpf;

        $eventos = Eventos::select('categoria_evento.Descricao as CatDesc','eventos.*')
        ->LeftJoin('categoria_evento','categoria_evento.id','=','eventos.id_categoriaevento')
        ->where("CpfResponsavel",$cpfResp)
        ->orderBy('dataInicioEvento')
        ->get();

return view('admin/coord/listaEventos',compact('eventos'));
    }
}
