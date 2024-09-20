<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PesquisaController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'corpo' => 'required',
        ]);

        Post::create($validatedData);

        return back()->with('success', 'Post criado com sucesso!');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $results = Post::where('titulo', 'LIKE', "%$query%")
            ->orWhere('corpo', 'LIKE', "%$query%")
            ->get();

        return view('pesquisa.resultado', ['results' => $results, 'query' => $query]);
    }
        public function create()
        {
            return view('admin.adicionarnoticia');
        }
}
