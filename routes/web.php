<?php

use App\Http\Controllers\Contents\AvaliacaoRequisicaoController;
use App\Http\Controllers\Contents\HomeController;
use App\Http\Controllers\Contents\PesquisarAvalicaoController;
use App\Http\Controllers\Forms\EnviarPesquisaAvaliacaoController;
use App\Http\Controllers\Forms\PesquisaRequisicaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/pesquisar/requisicoes', [AvaliacaoRequisicaoController::class, 'pesquisarRequisicao'])->name('pesquisar.requisicao');
Route::get('/search/requisicao', [PesquisaRequisicaoController::class, 'retornarRequisicao']);
Route::get('/search/avaliacao', [PesquisarAvalicaoController::class, 'retornarAvaliacao']);
Route::post('/forms/avaliacao', [EnviarPesquisaAvaliacaoController::class, 'enviarPesquisa'])->name('enviar.avaliacao');

Route::get('/pesquisar/avaliacoes',[PesquisarAvalicaoController::class, 'pesquisarAvaliacao'])->name('pesquisar.avaliacao');
Route::get('/export/avaliacoes', [AvaliacaoRequisicaoController::class, 'export'])->name('export.avaliacoes');