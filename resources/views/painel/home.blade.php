@extends('layouts.painel')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


    <section class="content">
        <!-- Page head -->
        <div class="page-head">
            <div>
                <h1 class="page-title">Projetos do Portfólio</h1>
                <p class="page-sub">Gerencie os projetos exibidos no seu site público.</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn-ghost"><i class="bi bi-download"></i> Exportar</button>
               <a href="{{ route('projeto.create') }}" class="btn-g"><i class="bi bi-plus-lg"></i> Novo Projeto</a>
            </div>
        </div>

        <!-- KPIs -->
        <div class="kpis">
            <div class="card-g ">
                <div class="kpi-icon"><i class="bi bi-kanban"></i></div>
                <div class="kpi-label">Total de projetos</div>
                <div class="kpi-value">{{ $total_projetos }}</div>
                {{-- <div class="kpi-delta"><i class="bi bi-arrow-up-right"></i> +6 este mês</div> --}}
            </div>
            <div class="card-g">
                <div class="kpi-icon"><i class="bi bi-eye"></i></div>
                <div class="kpi-label">Publicados</div>
                <div class="kpi-value">{{$publicados}}</div>
                {{-- <div class="kpi-delta"><i class="bi bi-arrow-up-right"></i> +4</div> --}}
            </div>
            <div class="card-g">
                <div class="kpi-icon"><i class="bi bi-pencil-square"></i></div>
                <div class="kpi-label">Rascunhos</div>
                <div class="kpi-value">{{$rascunhos}}</div>
                {{-- <div class="kpi-delta down"><i class="bi bi-arrow-down-right"></i> -2</div> --}}
            </div>

        </div>

        <!-- Projects table -->
        <div class="panel">
            <div class="panel-head">
                <h2 class="panel-title">Lista de Projetos</h2>

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
                                        <div>{{$projeto->nome}}</div><small>{{$projeto->descricao}}</small>
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

        <!-- Lower grid -->
        {{-- <div class="lower">
            <div class="card-g">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="panel-title">Desempenho dos Projetos</h3>
                    <select class="form-select" style="width:auto">
                        <option>Últimos 30 dias</option>
                        <option>Últimos 7 dias</option>
                        <option>Este ano</option>
                    </select>
                </div>
                <!-- Faux chart -->
                <svg viewBox="0 0 600 200" width="100%" height="200">
                    <defs>
                        <linearGradient id="ga" x1="0" x2="0" y1="0" y2="1">
                            <stop offset="0%" stop-color="#6c5ce7" stop-opacity=".5" />
                            <stop offset="100%" stop-color="#6c5ce7" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                    <path
                        d="M0,150 C60,120 100,160 160,110 C220,60 260,130 320,90 C380,50 440,120 500,70 C540,40 580,80 600,60 L600,200 L0,200 Z"
                        fill="url(#ga)" />
                    <path
                        d="M0,150 C60,120 100,160 160,110 C220,60 260,130 320,90 C380,50 440,120 500,70 C540,40 580,80 600,60"
                        fill="none" stroke="#8a7bff" stroke-width="2.5" />
                </svg>
            </div>
            <div class="card-g">
                <h3 class="panel-title mb-3">Atividade Recente</h3>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex gap-2">
                        <div class="thumb" style="width:34px;height:34px;font-size:.8rem">NB</div>
                        <div>
                            <div style="font-size:.9rem">Publicou <strong>Nebula Dashboard</strong></div><small
                                style="color:var(--g-muted)">há 2 horas</small>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="thumb"
                            style="width:34px;height:34px;font-size:.8rem;background:linear-gradient(135deg,#22d3ee,#22c55e)">
                            PX</div>
                        <div>
                            <div style="font-size:.9rem">Editou <strong>Pixel Studio</strong></div><small
                                style="color:var(--g-muted)">há 1 dia</small>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="thumb"
                            style="width:34px;height:34px;font-size:.8rem;background:linear-gradient(135deg,#f59e0b,#ef4444)">
                            OR</div>
                        <div>
                            <div style="font-size:.9rem">Adicionou 4 imagens em <strong>Orbit Mobile</strong></div><small
                                style="color:var(--g-muted)">há 3 dias</small>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="thumb"
                            style="width:34px;height:34px;font-size:.8rem;background:linear-gradient(135deg,#ef4444,#8a7bff)">
                            AT</div>
                        <div>
                            <div style="font-size:.9rem">Arquivou <strong>Atlas E-commerce</strong></div><small
                                style="color:var(--g-muted)">há 1 semana</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    </main>
    </div>

    <!-- New Project Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Projeto</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label">Título</label>
                            <input class="form-control" placeholder="Ex: Nebula Dashboard">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Categoria</label>
                            <select class="form-select">
                                <option>Web App</option>
                                <option>Mobile</option>
                                <option>Branding</option>
                                <option>E-commerce</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descrição curta</label>
                            <textarea class="form-control" rows="3" placeholder="Resumo exibido no card do portfólio"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Link do projeto</label>
                            <input class="form-control" placeholder="https://...">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tecnologias (separadas por vírgula)</label>
                            <input class="form-control" placeholder="React, Node, Postgres">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option>Rascunho</option>
                                <option>Publicado</option>
                                <option>Arquivado</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Imagem de capa</label>
                            <input class="form-control" type="file">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn-ghost" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn-g"><i class="bi bi-check2"></i> Salvar projeto</button>
                </div>
            </div>
        </div>
    </div>
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
