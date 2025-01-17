<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
use Illuminate\Http\Request;

class PesquisarAvalicaoController extends Controller
{
    public function pesquisarAvaliacao(Request $request){

        $avaliacoes = Avaliacao::with('requisicao')->paginate(10);
        return view('contents.pesquisarAvaliacao',compact('avaliacoes'));
    }
}
