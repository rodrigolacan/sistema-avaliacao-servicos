<?php

use App\Http\Controllers\Contents\AvaliacaoRequisicaoController;
use App\Http\Controllers\Contents\HomeController;
use App\Http\Controllers\Forms\PesquisaRequisicaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/pesquisar/requisicoes', [AvaliacaoRequisicaoController::class, 'pesquisarRequisicao'])->name('pesquisar.requisicao');
Route::get('search/requisicao', [PesquisaRequisicaoController::class, 'retornarRequisicao']);
