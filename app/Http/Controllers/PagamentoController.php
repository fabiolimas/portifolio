<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EduzzService;

class PagamentoController extends Controller
{
    protected $eduzz;

    public function __construct(EduzzService $eduzz)
    {
        $this->eduzz = $eduzz;
    }

    public function checkout(Request $request)
    {
        $dados = $request->validate([
            'name'         => 'required|string',
            'email'        => 'required|email',
            'cpf'          => 'required',
            'phone'        => 'required',
            'payment_type' => 'required|in:credit_card,pix,boleto',
            'installments' => 'nullable|integer',
            'value'        => 'required|numeric',
            'product_id'   => 'required|integer',
        ]);

        $pagamento = $this->eduzz->criarPagamento($dados);




        return redirect($pagamento['data']['checkout_url'] ?? '/erro');
    }

    public function produtosEduzz(){

        $produtos=json_decode($this->eduzz->listaProdutos());



        return view('produtos',compact('produtos'));
    }
}
