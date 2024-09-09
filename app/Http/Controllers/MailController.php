<?php

namespace App\Http\Controllers;


use App\Mail\ContatoSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function index(Request $request){

        $mailData=[
            'title'=>'Contato',
            'email'=>$request->email,
            'nome'=>$request->nome,
            'body'=>$request->mensagem,
        ];

        Mail::to('sac@lojasimagem.com.br')->send(new ContatoSite($mailData));



        return redirect('/')->withSuccess('Contato enviado com sucesso');
    }
}
