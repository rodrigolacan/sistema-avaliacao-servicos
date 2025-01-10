<?php

use App\Http\Controllers\contents\AvaliacaoRequisicao;
use App\Http\Controllers\contents\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/pesquisar/requisicoes', [AvaliacaoRequisicao::class, 'pesquisarRequisicao']);
