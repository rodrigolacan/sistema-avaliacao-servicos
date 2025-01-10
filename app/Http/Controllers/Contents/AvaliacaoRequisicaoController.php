<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvaliacaoRequisicaoController extends Controller
{
    public function pesquisarRequisicao(Request $request){
        return view('contents.pesquisarRequisicao');
    }
}
