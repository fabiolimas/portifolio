<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;


class ProjetoController extends Controller
{

public function index_projetos(){

$projetos=Projeto::all();






    return view('painel.projetos.index', compact('projetos'));
   }

   public function create(){


    return view('painel.projetos.create');
   }

   public function store(Request $request){


   $tecnologias=json_encode($request->tecnologia);
   $image = $request->file('capa');

     $imageName = $image->getClientOriginalName();

        // Ler a imagem
        $manager = new ImageManager(new Driver());
        $img = $manager->read($image->getRealPath());



        // Definir o caminho da imagem
        $imagePath = 'uploads/' . $request->nome;
        $fullImagePath = storage_path('app/public/' . $imagePath);

        // Criar a estrutura de pastas se não existir
        if (!file_exists($fullImagePath)) {
            mkdir($fullImagePath, 0755, true);
        }

        // Salvar a imagem
        $img->save($fullImagePath . '/' . $imageName);

        $imageUrl = $imagePath . '/' . $imageName;
        $imageUrls[] = asset('storage/' . $imageUrl);


        Projeto::create([
            'titulo'=>$request->nome,
            'descricao'=>$request->descricao,
            'capa'=>$imageUrl,
            'link'=>$request->link,
            'tecnologias'=>$tecnologias,


        ]);


   return redirect()->route('projetos')->with('success', 'Projeto cadastrado com sucesso!!');
   }

   public function destroy(Request $request, $id){


    $projeto=Projeto::find($id);



    $projeto->delete();

    return redirect()->route('projetos')->with('success',' Projeto excluido com sucesso');
   }
}
