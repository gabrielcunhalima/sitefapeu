<?php

use App\Http\Controllers\CalculoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('menu');
});


// Exibe o formulário de cálculo
Route::get('/calculorpabruto', [CalculoController::class, 'formbruto'])->name('calculorpabruto.form');

// Processa os dados do formulário e exibe o resultado
Route::post('/calculorpabruto', [CalculoController::class, 'calcularBruto'])->name('calculorpabruto.processar');

// Exibe o formulário de cálculo
Route::get('/calculorpaliquido', [CalculoController::class, 'formliquido'])->name('calculorpaliquido.form');

// Processa os dados do formulário e exibe o resultado
Route::post('/calculorpaliquido', [CalculoController::class, 'calcularliquido'])->name('calculorpaliquido.processar');