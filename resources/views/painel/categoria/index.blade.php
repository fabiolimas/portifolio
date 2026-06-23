@extends('layouts.painel')

@section('title', 'Categorias')

@section('content')
    <section class="content">
        <!-- Page head -->
        <div class="page-head">
            <div>
                <h1 class="page-title">Categorias </h1>
                <p class="page-sub">Gerencie as categorias cadastradas.</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn-ghost"><i class="bi bi-download"></i> Exportar</button>
                <a href="{{ route('categoria.create') }}" class="btn-g"><i class="bi bi-plus-lg"></i> Nova Categoria</a>
            </div>
        </div>

        <div class="panel">
            <div class="panel-head">
                <h2 class="panel-title">Lista de Categorias</h2>
                {{-- <div class="d-flex gap-2 flex-wrap">
                    <span class="filter-pill active">Todos</span>
                    <span class="filter-pill">Publicados</span>
                    <span class="filter-pill">Rascunhos</span>
                    <span class="filter-pill">Arquivados</span>
                </div> --}}
            </div>
            <div class="table-responsive">
                <table class="table-g">
                    <thead>
                        <tr>
                            <th style="width:35%">nome</th>

                            <th>Status</th>


                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($categorias as $categoria)
                        <tr>
                            <td>
                                <div class="project-cell">

                                    <div>
                                        <div>{{$categoria->nome}}</div>
                                    </div>
                                </div>
                            </td>

                            <td><span class="badge-g @if($categoria->status == 'Ativa') badge-pub @else badge-draft @endif ">{{$categoria->status}}</span></td>


                            <td>
                                <div class="row-actions">
                                    <button class="icon-btn" title="Ver"><i class="bi bi-eye"></i></button>
                                    <button class="icon-btn" title="Editar"><i class="bi bi-pencil"></i></button>
                                    <a class="icon-btn" href="#" title="Excluir"><i class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="panel-head" style="border-top:1px solid var(--g-border);border-bottom:0">
                <small style="color:var(--g-muted)">Mostrando 1–5 de 42 projetos</small>
                <div class="d-flex gap-1">
                    <button class="icon-btn"><i class="bi bi-chevron-left"></i></button>
                    <button class="icon-btn" style="background:var(--g-gradient);border-color:transparent">1</button>
                    <button class="icon-btn">2</button>
                    <button class="icon-btn">3</button>
                    <button class="icon-btn"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
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
