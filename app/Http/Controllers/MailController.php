<?php

namespace App\Http\Controllers;


use App\Mail\ContatoSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function index(Request $request){

$result=$request->result;

$v1=$request->v1;
$v2=$request->v2;

$resultado=$v1+$v2;


if($result == $resultado){
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
