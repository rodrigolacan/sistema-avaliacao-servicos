<?php

use App\Http\Controllers\Contents\AvaliacaoRequisicao;
use App\Http\Controllers\Contents\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/pesquisar/requisicoes', [AvaliacaoRequisicao::class, 'pesquisarRequisicao']);
