<?php

namespace App\Http\Controllers\forms;

use App\Factory\HttpClientFactory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class PesquisaRequisicaoController extends Controller
{
    protected $http;

    public function __construct()
    {
        $this->http = HttpClientFactory::create(['verify' => false], getenv('TOKEN_API_SEBRAE'));
    }

    public function retornarRequisicao(Request $request)
    {
        $numano = $request->requisicao;
        $requisicaoId = $request->requisicaoid;

        try {
            // Verifica se nenhum parâmetro foi fornecido
            if (empty($numano) && empty($requisicaoId)) {
                return redirect()
                    ->route('pesquisar.requisicao')
                    ->with('error', 'O campo "Requisição" ou "ID" é obrigatório.');
            }

            // Monta a URL com base no parâmetro fornecido
            $url = 'https://api.rr.sebrae.com.br/api/database/intranet2013/vSOLRequisicoes?';

            if (!empty($numano)) {
                $url .= 'campo=numano&condicao=' . $numano;
            }

            if (!empty($requisicaoId)) {
                // Se requisicaoid foi fornecido, usa ele na consulta
                $url .= (strpos($url, '?') !== false ? '&' : '') . 'campo=IDRequisicao&condicao=' . $requisicaoId;
            }

            $response = $this->http->get($url);

            $data = $response->json();
            if (!isset($data['data']) || empty($data['data'])) {
                return redirect()
                    ->route('pesquisar.requisicao')
                    ->with('error', 'Nenhum registro encontrado para o número informado.');
            }

            $requisicao = $data['data'];

            return view('contents.pesquisarRequisicao', ['requisicao' => $requisicao]);
        } catch (\Exception $e) {
            Log::error('Erro ao buscar requisição: ' . $e->getMessage());
            return redirect()
                ->route('pesquisar.requisicao')
                ->with('error', 'Ocorreu um erro ao buscar a requisição. Tente novamente mais tarde.');
        }
    }
}
