<?php

namespace App\Factory;


use Illuminate\Support\Facades\Http as FacadesHttp;

class HttpClientFactory
{
    private string $baseUrl;
    private array $defaultHeaders;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    /**
     * Cria e retorna uma instância configurada do cliente HTTP.
     *
     * @param array $config Configurações adicionais para a requisição.
     * @param string|null $token Token Bearer para autenticação, se necessário.
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public static function create(array $config = [], ?string $token = null)
    {
        // Inicia a instância do Http com a URL base (pode ser configurada se necessário)
        $http = FacadesHttp::baseUrl(getenv('BASE_URL'));

        // Se houver um token, adiciona ao cabeçalho de autorização
        if ($token) {
            $http = $http->withHeaders([
                'Authorization' => 'Bearer ' . $token,
            ]);
        }

        // Aplica qualquer configuração adicional fornecida
        if (!empty($config)) {
            $http = $http->withOptions($config);
        }

        return $http;
    }
}
