<?php

namespace App\Http\Controllers;

use App\Models\SelecoesPublicas;
use Illuminate\Http\Request;

class SelecoesPublicasController extends Controller
{
    public function index()
    {
        $selecoes = SelecoesPublicas::all();

        return view('selecoespublicass', compact('selecoes'));
    }
}