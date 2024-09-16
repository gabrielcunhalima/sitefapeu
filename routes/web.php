<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
}) ->name ('site.home');



Route::get('/quemsomos', function () {
    return view(view:'site.quemsomos');
}) ->name ('site.quemsomos');


Route::get('/gestao', function () {
    return view(view:'site.gestao');
}) ->name ('site.gestao');

Route::get('/licitacao', function () {
    return view(view:'site.licitacao');
}) ->name ('site.licitacao');

Route::get('/politica', function () {
    return view(view:'site.politica');
}) ->name ('site.politica');

Route::get('/transparencia', function () {
    return view(view:'site.transparencia');
}) ->name ('site.transparencia');

Route::get('/lesgislacao', function () {
    return view(view:'site.legislacao');
}) ->name ('site.legislacao');

Route::get('/colaborador', function () {
    return view(view:'site.colaborador');
}) ->name ('site.colaborador');

Route::get('/contact', function () {
    return view(view:'site.contact');
}) ->name ('site.contact');

Route::get('/noticias', function () {
    return view(view:'site.noticias');
}) ->name ('site.noticias');

Route::get('/espaco_do_coordenador', function () {
    return view(view:'site.espaco_do_coordenador');
}) ->name ('site.espaco_do_coordenador');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
