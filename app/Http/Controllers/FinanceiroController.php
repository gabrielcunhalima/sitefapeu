<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceiroController extends Controller
{
    public function index () {
        $dados = Auth::user();
        return view('admin/financeiro/menufinanceiro',compact('dados'));
    }
}
