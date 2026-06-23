@extends('layouts.painel')

@section('title', 'Projetos')

@section('content')
    <section class="content">
        <!-- Page head -->
        <div class="page-head">
            <div>
                <h1 class="page-title">Projetos </h1>
                <p class="page-sub">Gerencie os projetos exibidos no seu site público.</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn-ghost"><i class="bi bi-download"></i> Exportar</button>
                <a href="{{ route('projeto.create') }}" class="btn-g"><i class="bi bi-plus-lg"></i> Novo Projeto</a>
            </div>
        </div>

        <div class="panel">
            <div class="panel-head">
                <h2 class="panel-title">Lista de Projetos</h2>
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
                            <th style="width:35%">Projeto</th>
                            <th>Categoria</th>
                            <th>Status</th>


                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($projetos as $projeto)
                        <tr>
                            <td>
                                <div class="project-cell">
                                    <div class="thumb"><img src="{{ Storage::url($projeto->capa) }}" width="44px" height="44px"></div>
                                    <div>
                                        <div>{{$projeto->titulo}}</div><small>{{$projeto->descricao}}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{$projeto->cat_nome}}</td>
                            <td><span class="badge-g @if($projeto->status == 'Publicado') badge-pub @else badge-draft @endif ">{{$projeto->status}}</span></td>


                            <td>
                                <div class="row-actions">
                                    <button class="icon-btn" title="Ver"><i class="bi bi-eye"></i></button>
                                    <button class="icon-btn" title="Editar"><i class="bi bi-pencil"></i></button>
                                    <a class="icon-btn" href="{{ route('projeto.destroy', $projeto->id) }}" title="Excluir"><i class="bi bi-trash"></i></a>
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
