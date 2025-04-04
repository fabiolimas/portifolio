<?php

namespace App\Http\Controllers;


use App\Mail\ContatoSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function index(Request $request){

$result=$request->result;

if($result == 13){
    $mailData=[
        'title'=>'Contato',
        'email'=>$request->email,
        'nome'=>$request->nome,
        'body'=>$request->mensagem,
    ];


    Mail::to('contato@genesiscode.com.br')->send(new ContatoSite($mailData));


}else{
    return redirect('/')->withErrors('Erro no resultado da soma!');

}




        return redirect('/')->withSuccess('Contato enviado com sucesso');
    }
}
