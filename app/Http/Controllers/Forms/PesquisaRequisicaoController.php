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

    public function __construct(){
        $this->http = HttpClientFactory::create([], getenv('TOKEN_API_SEBRAE'));
    }

    public function retornarRequisicao(Request $request)
    {
        $numano = $request->requisicao;

        try {
            if (empty($numano)) {
                return redirect()
                        ->route('pesquisar.requisicao')
                        ->with('error', 'O campo "Requisição" é obrigatório.');
            }

            $response = $this->http->get('https://api.rr.sebrae.com.br/api/database/intranet2013/vSOLRequisicoes?campo=numano&condicao=' . $numano);

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
