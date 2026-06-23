<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



     public function index(Request $request)
    {

    $projetos=Projeto::where('status','Publicado')->get();
        return view('site.index', compact('projetos'));
    }
}


