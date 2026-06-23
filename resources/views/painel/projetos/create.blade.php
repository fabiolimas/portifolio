@extends('layouts.painel')

@section('title', 'Novo Projeto')



@section('content')

    <section class="content">
        <!-- Page head -->
        <div class="page-head">
            <div>
                <h1 class="page-title">Novo Projeto </h1>
                <p class="page-sub">Cadastre seus projetos.</p>
            </div>
            <div class="d-flex gap-2">

                <a href="{{ route('projetos') }}" class="btn-g"><i class="bi bi-arrow-left-square"></i> Voltar</a>
            </div>
        </div>




        <form method="post" action="{{ route('projeto.store') }}" class="form" enctype="multipart/form-data">
            @csrf
            <div class="div row">
                <div class="col-md-8">
                    <label class="form-label">Título</label>
                    <input class="form-control" name="nome" placeholder="Ex: Nebula Dashboard">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" name="categoria" required>
                        <option value="">Selecione</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <label class="form-label">Descrição curta</label>
                    <textarea class="form-control" name="descricao" rows="3" placeholder="Resumo exibido no card do portfólio"></textarea>
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Link do projeto</label>
                    <input class="form-control" name="link" placeholder="https://...">
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Tecnologias: </label>
                    <br>
                    <label for="php">PHP</label>
                    <input type="checkbox" name="tecnologia[]" id="php" class="form-check-input m-2" value="PHP">
                    <label for="laravel">Laravel</label>
                    <input type="checkbox" name="tecnologia[]" id="laravel" class="form-check-input m-2" value="Laravel">
                    <label for="javascript">Javascript</label>
                    <input type="checkbox" name="tecnologia[]" id="javascript" class="form-check-input m-2" value="Javascript">
                    <label for="html">HTML</label>
                    <input type="checkbox" name="tecnologia[]" id="html" class="form-check-input m-2" value="HTML">
                    <label for="wordpress">Wordpress</label>
                    <input type="checkbox" name="tecnologia[]" id="wordpress" class="form-check-input m-2" value="Wordpress">
                    <label for="elementor">Elementor</label>
                    <input type="checkbox" name="tecnologia[]" id="elementor" class="form-check-input m-2" value="Elementor">
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status" required>
                        <option value="Rascunho">Rascunho</option>
                        <option value="Publicado">Publicado</option>

                    </select>
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Imagem de capa</label>
                    <input class="form-control" type="file" name="capa" accept="image/*">
                </div>


                <div class="modal-footer mt-3">

                    <button class="btn-g"><i class="bi bi-check2"></i> Salvar projeto</button>
                </div>
            </div>
        </form>
        </div>

    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
