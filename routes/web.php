<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});



Route::get('/quemsomos', function () {
    return view(view:'site.quemsomos');
});


Route::get('/gestao', function () {
    return view(view:'site.gestao');
});

Route::get('/licitacao', function () {
    return view(view:'site.licitacao');
});

Route::get('/politica', function () {
    return view(view:'site.politica');
});

Route::get('/transparencia', function () {
    return view(view:'site.transparencia');
});

Route::get('/lesgislacao', function () {
    return view(view:'site.lesgislacao');
});

Route::get('/colaborador', function () {
    return view(view:'site.colaborador');
});

Route::get('/contact', function () {
    return view(view:'site.contact');
});