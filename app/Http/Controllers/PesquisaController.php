<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Conteudo;  // Importa o modelo Conteudo

class PesquisaController extends Controller
{
    // public function store(Request $request)
    // {
    //     // Validar os dados enviados pelo formulário
    //     $validatedData = $request->validate([
    //         'titulo' => 'required',
    //         'corpo' => 'required',
    //         'link' => 'required',
    //     ]);

    //     if ($validatedData['tipo'] === 'conteudo') {
    //         // Operação na nova tabela 'conteudos'
    //         $updateResult = Conteudo::where('titulo', $validatedData['titulo_conteudo'])
    //             ->update(['corpo' => $validatedData['corpo']]);

    //         if ($updateResult) {
    //             return back()->with('success', 'Conteúdo atualizado com sucesso!');
    //         } else {
    //             return back()->withErrors(['titulo_conteudo' => 'Falha ao atualizar o conteúdo.']);
    //         }
    //     } else {
    //         // Operação na tabela 'posts'
    //         Post::create([
    //             'titulo' => $validatedData['titulo'],
    //             'corpo' => $validatedData['corpo'],
    //             'link' => $validatedData['link'],
    //         ]);
    //         return back()->with('success', 'Post criado com sucesso!');
    //     }
    // }

    public function update(Request $request)
    {
        // Validar os dados enviados pelo formulário
        $validatedData = $request->validate([
            'titulo_conteudo' => 'required|string|max:255',
            'corpo' => 'required',
        ]);

        // Atualiza o conteúdo na nova tabela 'conteudos'
        $updateResult = Conteudo::where('titulo', $validatedData['titulo_conteudo'])
            ->update(['corpo' => $validatedData['corpo']]);

        if ($updateResult) {
            return back()->with('success', 'Conteúdo atualizado com sucesso!');
        } else {
            return back()->withErrors(['titulo_conteudo' => 'Falha ao atualizar o conteúdo.']);
        }
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('q');

    //     $noticias = Post::where('tipo', 'noticia')
    //         ->where(function ($q) use ($query) {
    //             $q->where('titulo', 'LIKE', "%{$query}%")
    //               ->orWhere('corpo', 'LIKE', "%{$query}%")
    //               ->orWhere('link', 'LIKE', "%{$query}%");
    //         })->get();

    //     $eventos = Post::where('tipo', 'evento')
    //         ->where(function ($q) use ($query) {
    //             $q->where('titulo', 'LIKE', "%{$query}%")
    //               ->orWhere('corpo', 'LIKE', "%{$query}%")
    //               ->orWhere('link', 'LIKE', "%{$query}%");
    //         })->get();

    //     $conteudos = Conteudo::where('titulo', 'LIKE', "%{$query}%")
    //         ->orWhere('corpo', 'LIKE', "%{$query}%")
    //         ->get();

    //     return view('pesquisa.resultado', compact('noticias', 'conteudos', 'eventos', 'query'));
    // }

//     public function noticiasRecentes()
// {
//     // Recupera as últimas 3 notíci
//     $noticiasCarousel = Post::where('tipo', 'noticia')
//                             ->orderBy('created_at', 'desc')
//                             ->take(3)
//                             ->get();

//     return view('noticias.noticias', compact('noticiasCarousel'));
// }

}
