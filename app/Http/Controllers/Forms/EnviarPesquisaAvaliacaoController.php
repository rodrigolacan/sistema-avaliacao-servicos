<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Avaliacao\AvaliacaoRequest;
use Illuminate\Http\Request;

class EnviarPesquisaAvaliacaoController extends Controller
{
    public function enviarPesquisa(AvaliacaoRequest $request){
        echo "<pre>";
        print_r($request->all());
    }
}
