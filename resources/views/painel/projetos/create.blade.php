@extends('adminlte::page')

@section('title', 'Projetos')

@section('content_header')
    <h1>Novo Projeto</h1>
@stop

@section('content')


    <div class="row">
            <form method="post" action="{{route('projeto.store')}}" class="form" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                <div class="col-md-6">
                    <label for="nome">Nome: </label>

                    <input type="text" name="nome" id="nome" class="form-control">


                </div>

                <div class="col-md-6">
                    <label for="capa">Imagem de capa: </label>

                    <input type="file" name="capa" id="capa" class="form-control" accept="image/*">


                </div>

                <div class="col-md-6">
                    <label for="">Tecnologias: </label>

                    <lable for="php">PHP</lable>
                    <input type="checkbox" name="tecnologia[]" id="php" class="form-control" value="PHP">
                    <lable for="laravel">Laravel</lable>
                    <input type="checkbox" name="tecnologia[]" id="laravel" class="form-control" value="Laravel">
                    <lable for="javascript">Javascript</lable>
                    <input type="checkbox" name="tecnologia[]" id="javascript" class="form-control" value="Javascript">
                    <lable for="html">HTML</lable>
                    <input type="checkbox" name="tecnologia[]" id="html" class="form-control" value="HTML">
                     <lable for="html">Wordpress</lable>
                    <input type="checkbox" name="tecnologia[]" id="wordpress" class="form-control" value="Wordpress">
                     <lable for="html">Elementor</lable>
                    <input type="checkbox" name="tecnologia[]" id="elementor" class="form-control" value="Elementor">

                </div>

                <div class="col-md-12">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control"></textarea>
                </div>

                <div class="col-md-12">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control">
                </div>

                <div class="row mt-2">
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>

                </div>

            </form>
    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
