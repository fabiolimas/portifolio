<?php

use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PagamentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('send-mail',[MailController::class, 'index'])->name('send-mail');


Route::post('/pagamento', [PagamentoController::class, 'checkout'])->name('pagamento');

Route::post('/webhook/eduzz', function (Request $request) {
    // Trate o retorno de pagamento aqui
    Log::info('Webhook Eduzz', $request->all());

    return response()->json(['status' => 'ok']);
})->name('eduzz.webhook');

Route::get('/comprar/{produto}', function ($produto) {
    $links = [
        'meu-produto' => 'https://chk.eduzz.com/8WPAP6QYWP',
        'outro-produto'=>'https://chk.eduzz.com/KW8K68P201',

    ];

    return redirect($links[$produto] ?? '/');
})->name('checkout');
