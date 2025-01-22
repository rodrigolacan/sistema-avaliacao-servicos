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

    public function retornarAvaliacao(Request $request){
        $numano = $request->requisicao;

        if ($numano) {
            $avaliacoes = Avaliacao::whereHas('requisicao', function ($query) use ($numano) {
                $query->where('numano', $numano);
            })->paginate(10);
    
            if ($avaliacoes->isEmpty()) {
                return redirect()->route('pesquisar.avaliacao')
                    ->with('error', 'Nenhuma avaliação encontrada para o número informado.');
            }
    
            return view('contents.pesquisarAvaliacao', compact('avaliacoes'));
        }
    
        return redirect()->route('pesquisar.avaliacao')
            ->with('error', 'Por favor, informe um número para pesquisa.');
    }
}
