<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Controller::class , 'index'])->name('start');

Route::post('send-mail',[MailController::class, 'index'])->name('send-mail');




Auth::routes();

Route::get('painel/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('painel/projetos', [App\Http\Controllers\ProjetoController::class, 'index_projetos'])->name('projetos');
Route::get('painel/projeto', [App\Http\Controllers\ProjetoController::class, 'create'])->name('projeto.create');
Route::post('painel/projeto', [App\Http\Controllers\ProjetoController::class, 'store'])->name('projeto.store');

Route::get('painel/destroy/{id}', [App\Http\Controllers\ProjetoController::class, 'destroy'])->name('projeto.destroy');
