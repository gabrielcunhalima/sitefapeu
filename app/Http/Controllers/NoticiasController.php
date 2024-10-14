<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;


class NoticiasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
        $this->middleware('auth')->except(['noticias', 'noticiasrecentes', 'show', 'search', 'allNoticias']);
    }

    public function noticiasrecentes()
    {
        $noticiasrecentes = Post::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('noticias.detalhes', compact('noticiasrecentes'));
        
    }

    public function noticias()
    {
        $noticias = Post::orderBy('created_at', 'desc')
            ->get();

        return view('noticias.noticias', compact('noticias'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $noticias = Post::where('titulo', 'LIKE', "%{$query}%")
            ->orWhere('corpo', 'LIKE', "%{$query}%")
            ->get();

        return view('noticias.resultado', compact('noticias'));
    }

    public function show($link)
    {
        $noticia = Post::where('link', $link)->firstOrFail();
        return view('noticias.detalhes', compact('noticia'));
    }

    public function allNoticias()
    {
        $noticias = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('noticias.noticias', compact('noticias'));
    }
}
