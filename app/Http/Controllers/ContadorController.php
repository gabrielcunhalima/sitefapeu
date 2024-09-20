<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contador;
use App\Models\Link;

class ContadorController extends Controller
{
    // Exibe o contador e os links acessados
    public function index()
    {
        $contador = Contador::first();
        $links = Link::orderBy('clicks', 'desc')->get(); // Links mais clicados
        return view('contador.index', compact('contador', 'links'));
    }

    // Incrementa o contador de acessos totais
    public function incrementar()
    {
        $contador = Contador::firstOrNew();
        $contador->increment('contador');
        $contador->save();
        return redirect()->back();
    }

    // Acessar um link específico
    public function acessarLink($url)
    {
        $link = Link::firstOrCreate(['url' => $url]);
        $link->increment('clicks'); // Incrementa o contador de cliques
        return redirect($url); // Redireciona para o link
    }
}
