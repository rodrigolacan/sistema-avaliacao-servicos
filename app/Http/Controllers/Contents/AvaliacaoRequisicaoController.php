<?php

namespace App\Http\Controllers\Contents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avaliacao;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AvaliacoesExport;
use PDF;


class AvaliacaoRequisicaoController extends Controller
{
    public function pesquisarRequisicao(Request $request){
        return view('contents.pesquisarRequisicao');
    }

    public function export(Request $request)
    {
        $avaliacoes = Avaliacao::all();
    
        $format = $request->input('format', 'excel'); // Padrão é Excel
    
        if ($format === 'pdf') {
            // Exportar para PDF
            $pdf = PDF::loadView('avaliacao.pdf', compact('avaliacoes'));
            return $pdf->download('avaliacao.pdf');
        } else {
            // Exportar para Excel
            return Excel::download(new AvaliacoesExport($avaliacoes), 'avaliacoes.xlsx');
        }
    }
}
