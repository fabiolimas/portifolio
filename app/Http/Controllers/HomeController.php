<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
            $projetos=Projeto::join('categorias','categorias.id','projetos.categoria')
            ->select('projetos.*', 'categorias.nome as cat_nome')
            ->paginate(20);

            $total_projetos=Projeto::all()->count();
            $rascunhos=Projeto::where('status','Rascunho')->count();
            $publicados=Projeto::where('status','Publicado')->count();

        return view('painel.home',compact('projetos','total_projetos','rascunhos','publicados'));
    }
}
