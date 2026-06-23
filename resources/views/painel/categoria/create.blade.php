@extends('layouts.painel')

@section('title', 'Nova Categoria')



@section('content')

    <section class="content">
        <!-- Page head -->
        <div class="page-head">
            <div>
                <h1 class="page-title">Nova Categoria </h1>

            </div>
            <div class="d-flex gap-2">

                <a href="{{ route('categorias') }}" class="btn-g"><i class="bi bi-arrow-left-square"></i> Voltar</a>
            </div>
        </div>




        <form method="post" action="{{ route('categoria.store') }}" class="form" enctype="multipart/form-data">
            @csrf
            <div class="div row">
                <div class="col-md-8">
                    <label class="form-label">Nome</label>
                    <input class="form-control" name="nome" placeholder="Ex: Nebula Dashboard">
                </div>


                <div class="col-md-4 ">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status" required>
                        <option value="Ativa">Ativa</option>
                        <option value="Inativa">Inativa</option>

                    </select>
                </div>



                <div class="modal-footer mt-3">

                    <button class="btn-g"><i class="bi bi-check2"></i> Salvar categoria</button>
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
