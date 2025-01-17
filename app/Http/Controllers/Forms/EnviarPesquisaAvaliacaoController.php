<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Avaliacao\AvaliacaoRequest;
use App\Models\Avaliacao;
use App\Models\Requisicao;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EnviarPesquisaAvaliacaoController extends Controller
{
    public function enviarPesquisa(AvaliacaoRequest $request){
        try {
            $requisicaoExistente = Requisicao::where('numano', $request->input('requisicao.numano'))->first();

            if ($requisicaoExistente) {
                return redirect()->route('pesquisar.requisicao')
                    ->withErrors(['numano' => 'Esta requisição já foi avaliada.']);
            }

            DB::transaction(function () use ($request) {
                // Salvar a requisição
                $requisicao = Requisicao::create([
                    'numano' => $request->input('requisicao.numano'),
                    'situacao' => $request->input('requisicao.situacao'),
                    'data_entrega' => $request->input('requisicao.data-entrega'),
                    'numano_tipo' => $request->input('requisicao.numano-tipo'),
                ]);
                Avaliacao::create([
                    'requisicao_id' => $requisicao->id,
                    'rate_evento' => $request->input('rate-evento'),
                    'rate_servico' => $request->input('rate-servico'),
                    'rate_cordialidade' => $request->input('rate-cordialidade'),
                    'rate_geral' => $request->input('rate-geral'),
                    'elogios' => $request->input('elogios'),
                    'melhorias'=> $request->input('melhorias'),
                    'usuario_id' => $request->input('usuario-id'),
                    'nome_usuario' => $request->input('nome-usuario'),
                ]);
            });
        
            return redirect()->route('pesquisar.requisicao')->with('success', 'Requisição salva com sucesso!');
        } catch (\Exception $e) {
            Log::error('Erro ao salvar a requisição: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
        
            return redirect()->route('pesquisar.requisicao')->withErrors('Não foi possível salvar a avaliação.');
        }
    }
}
