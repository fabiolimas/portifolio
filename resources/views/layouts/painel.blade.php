<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Admin · Portfólio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('assets/css/painel.css')}}">
</head>
<body>
<div class="app">

    <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="brand">
      <div class="brand-logo">G</div>
      <div class="brand-name">Genesis<small>Admin Panel</small></div>
    </div>

    <nav class="d-flex flex-column gap-1">
      <div class="nav-section">Geral</div>
      <a class="nav-link-g @if (Route::is('home')) active @endif" href="{{route('home')}}"><i class="bi bi-grid-1x2"></i> Dashboard</a>
      <a class="nav-link-g @if (Route::is('projetos')) active @endif" href="{{route('projetos')}}"><i class="bi bi-kanban"></i> Projetos</a>
      <a class="nav-link-g @if (Route::is('categorias')) active @endif" href="{{route('categorias')}}"><i class="bi bi-tags"></i> Categorias</a>
      {{-- <a class="nav-link-g" href="#"><i class="bi bi-images"></i> Mídia</a>

      <div class="nav-section">Conteúdo</div>
      <a class="nav-link-g" href="#"><i class="bi bi-person-badge"></i> Sobre mim</a>
      <a class="nav-link-g" href="#"><i class="bi bi-envelope"></i> Mensagens</a>
      <a class="nav-link-g" href="#"><i class="bi bi-bar-chart"></i> Estatísticas</a>

      <div class="nav-section">Sistema</div>
      <a class="nav-link-g" href="#"><i class="bi bi-people"></i> Usuários</a>
      <a class="nav-link-g" href="#"><i class="bi bi-gear"></i> Configurações</a> --}}
    </nav>

    <div class="sidebar-footer">
      <div class="avatar">{{mb_strtoupper(mb_substr(Auth::user()->name, 0, 2))}}</div>
      <div style="line-height:1.1">
        <div style="font-weight:600;font-size:.9rem">{{Auth::user()->name}}</div>
        {{-- <small style="color:var(--g-muted)">{{Auth::user()->perfil}}</small> --}}
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button class="icon-btn ms-auto" title="Sair" type="submit"><i class="bi bi-box-arrow-right"></i></button>
                                    </form>

    </div>
  </aside>
 <main class="main">
    <header class="topbar">
      <button class="icon-btn d-lg-none" onclick="document.getElementById('sidebar').classList.toggle('open')"><i class="bi bi-list"></i></button>
      <div class="search">
        <i class="bi bi-search"></i>
        <input placeholder="Buscar projetos, categorias, clientes..." />
      </div>
      <div class="ms-auto d-flex align-items-center gap-2">
        <button class="icon-btn"><i class="bi bi-moon-stars"></i></button>
        <button class="icon-btn"><i class="bi bi-bell"></i><span class="dot"></span></button>
        <button class="icon-btn"><i class="bi bi-question-circle"></i></button>
      </div>
    </header>
    @yield('content')
 </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
//   document.querySelectorAll('.filter-pill').forEach(p=>{
//     p.addEventListener('click',()=>{
//       document.querySelectorAll('.filter-pill').forEach(x=>x.classList.remove('active'));
//       p.classList.add('active');
//     });
//   });
//   document.querySelectorAll('.nav-link-g').forEach(a=>{
//     a.addEventListener('click',e=>{e.preventDefault();
//       document.querySelectorAll('.nav-link-g').forEach(x=>x.classList.remove('active'));
//       a.classList.add('active');
//     });
//   });
</script>
</body>
</html>
