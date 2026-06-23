<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index_categoria(){

        $categorias=Categoria::all();


    return view('painel.categoria.index', compact('categorias'));
    }

    public function create(){


    return view('painel.categoria.create');
    }

    public function store(Request $request){


        Categoria::create([
            'nome'=>$request->nome,
            'status'=>$request->status,


        ]);


        return redirect()->route('categorias')->with('success','Categoria cadastrada com sucesso');
    }


}
