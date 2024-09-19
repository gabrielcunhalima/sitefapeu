<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PesquisaController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');
    
        // Realiza a busca no banco de dados
        $results = Post::where('titulo', 'LIKE', "%$query%")
                       ->orWhere('corpo', 'LIKE', "%$query%")
                       ->get();
    
        // Retorna a view com os resultados da pesquisa
        return view('pesquisa.resultado', ['results' => $results, 'query' => $query]);
    }
}
