<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GenesisCode | Desenvolvimento de Sites e Sistemas Web</title>
    <meta
      name="description"
      content="GenesisCode desenvolve sistemas e sites de alta performance para o seu negócio crescer no digital. Solicite um orçamento hoje mesmo."
    />
    <meta property="og:title" content="GenesisCode | Onde o código dá vida às ideias" />
    <meta
      property="og:description"
      content="Sistemas web, sites institucionais e e-commerce de alta performance com tecnologia de ponta."
    />

    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- Devicon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&family=Space+Grotesk:wght@500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets/css/front.css')}}">
      </head>
<body>
    <div id="app">
        <nav id="gc-nav" class="gc-navbar navbar navbar-expand-lg fixed-top py-3 gc-scrolled">
      <div class="container">
        <a class="navbar-brand gc-brand d-flex align-items-center gap-1" href="#home">
          <span class="gc-bracket">&lt;</span>GenesisCode<span class="gc-bracket">/&gt;</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#gcNav" aria-controls="gcNav" aria-expanded="false" aria-label="Abrir menu">
          <i class="bi bi-list fs-3 gc-muted"></i>
        </button>
        <div class="collapse navbar-collapse" id="gcNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
            <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
            <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
            <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
              <a class="gc-btn-primary d-inline-block text-decoration-none" href="#contato">Orçamento grátis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <body>


            @yield('content')


</body>
</html>
