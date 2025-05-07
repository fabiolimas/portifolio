<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class EduzzService
{
    protected $baseUrl = 'https://api.eduzz.com/';
    protected $apiToken;

    public function __construct()
    {
        $this->apiToken = config('services.eduzz.token');
    }

    public function criarPagamento(array $dados)
    {
        $response = Http::withToken($this->apiToken)
            ->post($this->baseUrl . '/v2/checkout/create', [
                'product_id'   => $dados['product_id'],
                'name'         => $dados['name'],
                'email'        => $dados['email'],
                'document'     => $dados['cpf'], // CPF ou CNPJ
                'payment_type' => $dados['payment_type'], // 'credit_card', 'pix', 'boleto'
                'installments' => $dados['installments'] ?? 1,
                'phone'        => $dados['phone'],
                'callback_url' => route('eduzz.webhook'),
                'value'        => $dados['value'],
            ]);



        return $response->json();
    }

    public function listaProdutos(array $dados){

        $response = Http::withToken($this->apiToken)
            ->post($this->baseUrl . '/myeduzz/v1/products', [

            ]);



        return $response->json();

    }
}
