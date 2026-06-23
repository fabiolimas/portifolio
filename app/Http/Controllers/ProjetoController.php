<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;


class ProjetoController extends Controller
{

public function index_projetos(){

$projetos=Projeto::join('categorias','categorias.id','projetos.categoria')
->select('projetos.*', 'categorias.nome as cat_nome')


->paginate(20);




    return view('painel.projetos.index', compact('projetos'));
   }

   public function create(){

   $categorias=Categoria::where('status','Ativa')->get();


    return view('painel.projetos.create',compact('categorias'));
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
            'status'=>$request->status,
            'categoria'=>$request->categoria,


        ]);


   return redirect()->route('projetos')->with('success', 'Projeto cadastrado com sucesso!!');
   }

   public function destroy(Request $request, $id){


    $projeto=Projeto::find($id);



    $projeto->delete();

    return redirect()->route('projetos')->with('success',' Projeto excluido com sucesso');
   }
}
