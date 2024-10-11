<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SelecoesPublicas;
use App\Models\User;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
    }

    public function index()
    {
        $dados = Auth::user();
        return view('admin/menu', compact('dados'));
    }

    public function createNoticia()
    {
        $dados = Auth::user();
        return view('admin.adicionarnoticia', compact('dados'));
    }

    public function createSelecaoPublica()
    {
        $dados = Auth::user();
        return view('admin.adicionarselecaopublica', compact('dados'));
    }

    public function storeNoticia(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'corpo' => 'required',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:5096',
        ]);

        $slug = Str::slug($request->titulo);

        $slugBase = $slug;
        $count = 1;
        while (Post::where('link', $slug)->exists()) {
            $slug = "{$slugBase}-{$count}";
            $count++;
        }

        $data['link'] = $slug;

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imageName = time() . '.' . $imagem->getClientOriginalExtension();
            $imagem->move(public_path('images/noticias'), $imageName);
            $data['imagem'] = 'images/noticias/' . $imageName;
        }

        Post::create($data);

        return redirect()->route('noticias', $data['link'])->with('success', 'Notícia criada com sucesso!');
    }

    public function storeSelecaoPublica(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'ordem' => 'required',
            'processo' => 'required',
            'orgao' => 'required',
            'projeto' => 'required',
            'objeto' => 'required',
            'contratoconvenio' => 'required',
            'dataabertura' => 'required',
            'datapublicacao' => 'required',
            'selecaopublica' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'resultado' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);

        if ($request->hasFile('selecaopublica')) {
            $documento = $request->file('selecaopublica');
            $docName = time() . '.' . $documento->getClientOriginalExtension();
            $documento->move(public_path('docs/selecoespublicas'), $docName);
            $data['selecaopublica'] = 'docs/selecoespublicas/' . $docName;
        }

        SelecoesPublicas::create($data);

        return redirect()->route('selecoespublicas.show', $data['link'])->with('success', 'Seleção Pública criada com sucesso!');
    }

    public function adicionarUsuario(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $dados['password'] = bcrypt($dados['password']);
        User::create($dados);

        return redirect()->route('admin.menu')->with('success', 'Usuário criado com sucesso!');
    }

    public function createUsuario()
{
    $dados = Auth::user();
    return view('admin.adicionarusuario', compact('dados'));
}

    public function login(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($dados)) {
            $request->session()->regenerate();

            return redirect()->route('admin.menu');
        }

        return redirect()->route('login.login')->withErrors(['login' => 'Credenciais inválidas.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('/');
    }

}
