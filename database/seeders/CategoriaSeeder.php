<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Categoria::create([
        'nome'=>'WebApp',
        'status'=>'Ativa',
       ]);
       Categoria::create([
        'nome'=>'Landing Page',
        'status'=>'Ativa',
       ]);
       Categoria::create([
        'nome'=>'E-commerce',
        'status'=>'Ativa',
       ]);
       Categoria::create([
        'nome'=>'Site Institucional',
        'status'=>'Ativa',
       ]);

    }
}
