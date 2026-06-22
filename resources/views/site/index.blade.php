@extends('layouts.front')

@section('content')

<header id="home" class="gc-hero">
      <span class="gc-orb gc-orb-1"></span>
      <span class="gc-orb gc-orb-2"></span>
      <div class="container position-relative" style="z-index: 2">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <span class="gc-eyebrow mb-4"><i class="bi bi-stars"></i> Desenvolvimento de software</span>
            <h1 class="gc-hero-title mt-4">Onde o código dá <span class="gc-text-grad">vida às ideias</span>.</h1>
            <p class="gc-hero-lead gc-muted mt-4">Desenvolvemos sistemas e sites de alta performance para o seu negócio crescer no digital. Solicite um orçamento e comece hoje mesmo.</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
              <a class="gc-btn-primary text-decoration-none" href="#contato">Entre em contato</a>
              <a class="gc-btn-ghost text-decoration-none" href="#projetos">Ver projetos</a>
            </div>
            <div class="d-flex flex-wrap gap-4 mt-5 gc-muted small">
              <span class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill" style="color: var(--gc-accent)"></i> Código limpo</span>
              <span class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill" style="color: var(--gc-accent)"></i> Responsivo</span>
              <span class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill" style="color: var(--gc-accent)"></i> Alta performance</span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="gc-code-window gc-reveal">
              <div class="gc-code-bar">
                <span class="gc-dot" style="background: #ff5f57"></span>
                <span class="gc-dot" style="background: #febc2e"></span>
                <span class="gc-dot" style="background: #28c840"></span>
                <span class="gc-muted ms-2 small">genesis.ts</span>
              </div>
              <pre class="gc-code-body mb-0"><span class="tk-com">// soluções sob medida</span>
<span class="tk-key">const</span> <span class="tk-fn">genesis</span> = {
  <span class="tk-fn">missao</span>: <span class="tk-str">'transformar ideias em código'</span>,
  <span class="tk-fn">stack</span>: [<span class="tk-str">'Laravel'</span>, <span class="tk-str">'HTML'</span>, <span class="tk-str">'PHP'</span>],
  <span class="tk-fn">performance</span>: <span class="tk-num">100</span>,
  <span class="tk-fn">deploy</span>() {
    <span class="tk-key">return</span> <span class="tk-str">'🚀 seu negócio no digital'</span>;
  },
};</pre>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Tech marquee -->
    <section class="gc-marquee" aria-label="Tecnologias">
      <div class="gc-marquee-track">
        <i class="devicon-html5-plain"></i><i class="devicon-css3-plain"></i><i class="devicon-javascript-plain"></i><i class="devicon-typescript-plain"></i><i class="devicon-php-plain"></i><i class="devicon-laravel-plain"></i><i class="devicon-mysql-plain"></i><i class="devicon-bootstrap-plain"></i><i class="devicon-react-original"></i><i class="devicon-wordpress-plain"></i><i class="devicon-github-original"></i><i class="devicon-tailwindcss-original"></i>
        <i class="devicon-html5-plain"></i><i class="devicon-css3-plain"></i><i class="devicon-javascript-plain"></i><i class="devicon-typescript-plain"></i><i class="devicon-php-plain"></i><i class="devicon-laravel-plain"></i><i class="devicon-mysql-plain"></i><i class="devicon-bootstrap-plain"></i><i class="devicon-react-original"></i><i class="devicon-wordpress-plain"></i><i class="devicon-github-original"></i><i class="devicon-tailwindcss-original"></i>
      </div>
    </section>

    <!-- Services -->
    <section id="servicos" class="gc-section">
      <div class="container">
        <div class="text-center mb-5 gc-reveal">
          <span class="gc-eyebrow mb-3">Serviços</span>
          <h2 class="display-5 fw-bold mt-3">Soluções digitais <span class="gc-text-grad">de ponta a ponta</span></h2>
          <p class="gc-muted mx-auto mt-3" style="max-width: 40rem">Do conceito ao deploy, criamos produtos digitais que geram resultado real.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="gc-card gc-reveal">
              <div class="gc-icon-badge"><i class="bi bi-code-slash"></i></div>
              <h3 class="h5 fw-semibold">Sistemas Web</h3>
              <p class="gc-muted small mb-0 mt-2">Plataformas sob medida com painéis administrativos, controle de acesso e regras de negócio complexas.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="gc-card gc-reveal">
              <div class="gc-icon-badge"><i class="bi bi-rocket-takeoff"></i></div>
              <h3 class="h5 fw-semibold">Sites de Alta Performance</h3>
              <p class="gc-muted small mb-0 mt-2">Sites rápidos, responsivos e otimizados para SEO que convertem visitantes em clientes.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="gc-card gc-reveal">
              <div class="gc-icon-badge"><i class="bi bi-cart3"></i></div>
              <h3 class="h5 fw-semibold">E-commerce &amp; Pagamentos</h3>
              <p class="gc-muted small mb-0 mt-2">Lojas virtuais completas com integração de pagamentos, gestão de pedidos e estoque.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="gc-card gc-reveal">
              <div class="gc-icon-badge"><i class="bi bi-pencil-square"></i></div>
              <h3 class="h5 fw-semibold">CMS &amp; WordPress</h3>
              <p class="gc-muted small mb-0 mt-2">Sites editáveis com CMS próprio ou WordPress/Elementor para você gerenciar seu conteúdo.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats -->
    <section class="gc-section pt-0">
      <div class="container">
        <div class="gc-card gc-reveal" style="padding: 2.5rem">
          <div class="row text-center g-4">
            <div class="col-6 col-lg-3"><div class="gc-stat-num gc-text-grad">+30</div><div class="gc-muted small mt-2">Projetos entregues</div></div>
            <div class="col-6 col-lg-3"><div class="gc-stat-num gc-text-grad">100%</div><div class="gc-muted small mt-2">Foco em performance</div></div>
            <div class="col-6 col-lg-3"><div class="gc-stat-num gc-text-grad">+5</div><div class="gc-muted small mt-2">Anos de experiência</div></div>
            <div class="col-6 col-lg-3"><div class="gc-stat-num gc-text-grad">24/7</div><div class="gc-muted small mt-2">Suporte dedicado</div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects -->
    <section id="projetos" class="gc-section pt-0">
      <div class="container">
        <div class="text-center mb-5 gc-reveal">
          <span class="gc-eyebrow mb-3">Portfólio</span>
          <h2 class="display-5 fw-bold mt-3">Projetos <span class="gc-text-grad">em destaque</span></h2>
          <p class="gc-muted mx-auto mt-3" style="max-width: 40rem">Conheça alguns sistemas e sites que desenvolvemos para nossos clientes.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6">
            <article class="gc-project gc-reveal">
              <div class="gc-project-thumb"><img src="https://www.genesiscode.com.br/assets/img/campeonato_gamer/home.PNG" alt="Captura de tela do projeto Campeonato Gamer" loading="lazy" /></div>
              <div class="p-4">
                <div class="d-flex flex-wrap gap-2 mb-3"><span class="gc-tag">PHP</span><span class="gc-tag">Laravel</span><span class="gc-tag">JavaScript</span></div>
                <h3 class="h5 fw-semibold">Campeonato Gamer</h3>
                <p class="gc-muted small mt-2">Sistema de gerenciamento de campeonatos online com cadastro de usuários, rankings e atribuição automática de pontuações.</p>
                <a class="gc-project-link" href="https://painel.campeonatogamer.com.br/" target="_blank" rel="noopener noreferrer">Ver projeto <i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="gc-project gc-reveal">
              <div class="gc-project-thumb"><img src="https://www.genesiscode.com.br/assets/img/dsf/home.PNG" alt="Captura de tela do projeto DSF" loading="lazy" /></div>
              <div class="p-4">
                <div class="d-flex flex-wrap gap-2 mb-3"><span class="gc-tag">PHP</span><span class="gc-tag">Laravel</span><span class="gc-tag">JavaScript</span></div>
                <h3 class="h5 fw-semibold">DSF</h3>
                <p class="gc-muted small mt-2">Gerenciador de exames com controle de usuários por nível de acesso, agendamentos e geração de resultados em PDF.</p>
                <a class="gc-project-link" href="https://dsffostter.com/login" target="_blank" rel="noopener noreferrer">Ver projeto <i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="gc-project gc-reveal">
              <div class="gc-project-thumb"><img src="https://www.genesiscode.com.br/assets/img/ibrea/home.PNG" alt="Captura de tela do projeto Sistema Ibrea" loading="lazy" /></div>
              <div class="p-4">
                <div class="d-flex flex-wrap gap-2 mb-3"><span class="gc-tag">PHP</span><span class="gc-tag">Laravel</span><span class="gc-tag">JavaScript</span></div>
                <h3 class="h5 fw-semibold">Sistema Ibrea</h3>
                <p class="gc-muted small mt-2">Site editável com CMS próprio desenvolvido em Laravel, permitindo gerenciar cada seção de forma dinâmica.</p>
                <a class="gc-project-link" href="https://ibrea.org.br/" target="_blank" rel="noopener noreferrer">Ver projeto <i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="gc-project gc-reveal">
              <div class="gc-project-thumb"><img src="https://www.genesiscode.com.br/assets/img/fostter/home.JPG" alt="Captura de tela do projeto Fostter Assessoria" loading="lazy" /></div>
              <div class="p-4">
                <div class="d-flex flex-wrap gap-2 mb-3"><span class="gc-tag">WordPress</span><span class="gc-tag">Elementor</span><span class="gc-tag">PHP</span></div>
                <h3 class="h5 fw-semibold">Fostter Assessoria</h3>
                <p class="gc-muted small mt-2">Site institucional moderno desenvolvido com WordPress e Elementor, focado em apresentação de serviços.</p>
                <a class="gc-project-link" href="https://fostterassessoria.com.br/" target="_blank" rel="noopener noreferrer">Ver projeto <i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contato" class="gc-section pt-0">
      <div class="container">
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-5">
            <div class="h-100 d-flex flex-column justify-content-center gc-reveal">
              <span class="gc-eyebrow mb-3 align-self-start">Contato</span>
              <h2 class="display-6 fw-bold mt-3">Vamos construir seu <span class="gc-text-grad">próximo projeto</span></h2>
              <p class="gc-muted mt-3">Conte sua ideia para a gente. Respondemos rápido e sem compromisso.</p>
              <div class="d-flex flex-column gap-3 mt-4">
                <a class="gc-contact-row text-decoration-none" href="https://wa.me/5574991381274?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento." target="_blank" rel="noopener noreferrer">
                  <i class="bi bi-whatsapp"></i>
                  <span><span class="d-block gc-muted small">WhatsApp</span><span class="fw-semibold">Fale com um especialista</span></span>
                </a>
                <a class="gc-contact-row text-decoration-none" href="mailto:contato@genesiscode.com.br">
                  <i class="bi bi-envelope"></i>
                  <span><span class="d-block gc-muted small">E-mail</span><span class="fw-semibold">contato@genesiscode.com.br</span></span>
                </a>
                <div class="gc-contact-row">
                  <i class="bi bi-geo-alt"></i>
                  <span><span class="d-block gc-muted small">Atendimento</span><span class="fw-semibold">Brasil · 100% online</span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <form action="{{route('send-mail')}}" method="post" class="gc-contact-panel gc-reveal" id="gc-form">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label gc-muted small" for="nome">Nome</label>
                  <input id="nome" type="text" class="form-control gc-form-control" placeholder="Seu nome" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label gc-muted small" for="email">E-mail</label>
                  <input id="email" type="email" class="form-control gc-form-control" placeholder="voce@email.com" required />
                </div>
                <div class="col-12">
                  <label class="form-label gc-muted small" for="assunto">Assunto</label>
                  <input id="assunto" type="text" class="form-control gc-form-control" placeholder="Ex: site institucional, sistema web..." />
                </div>
                <div class="col-12">
                  <label class="form-label gc-muted small" for="msg">Mensagem</label>
                  <textarea id="msg" rows="4" class="form-control gc-form-control" placeholder="Conte um pouco sobre o seu projeto" required></textarea>
                </div>
                 <div class="row mt-2">
                                            <div class="col-md-2 conta">
                                                @php

                                                $v1=rand(1,9);

                                                $v2=rand(1,9);

                                                $result=$v1+$v2;

                                                @endphp
                                               <span class="valores text-white mt-3">{{$v1}} + {{$v2}} =</span>
                                            </div>
                                            <input type="hidden" value="{{$v1}}" name='v1'>
                                            <input type="hidden" value="{{$v2}}" name='v2'>
                                            <div class="col-md-3 mb-2">
                                                <input type="number" name="result " class="form-control gc-form-control" required>
                                            </div>

                                        </div>
                <div class="col-12">
                  <button type="submit" class="gc-btn-primary w-100">Enviar mensagem <i class="bi bi-send ms-1"></i></button>
                </div>


              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="gc-footer">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-md-6">
            <a class="gc-brand d-inline-flex align-items-center gap-1 text-decoration-none" href="#home">
              <span class="gc-bracket">&lt;</span>GenesisCode<span class="gc-bracket">/&gt;</span>
            </a>
            <p class="gc-muted small mt-3 mb-0" style="max-width: 28rem">Onde o código dá vida às ideias. Sistemas e sites de alta performance para o seu negócio crescer no digital.</p>
          </div>
          <div class="col-md-6">
            <div class="d-flex gap-3 justify-content-md-end">
              <a class="gc-social" href="https://wa.me/5574991381274" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
              <a class="gc-social" href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="bi bi-github"></i></a>
              <a class="gc-social" href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a class="gc-social" href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
        <hr class="my-4" style="border-color: var(--gc-border)" />
        <p class="gc-muted small text-center mb-0">© <span id="gc-year"></span> GenesisCode. Todos os direitos reservados.</p>
      </div>
    </footer>

    <a class="gc-whatsapp" href="https://wa.me/5574991381274?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento." target="_blank" rel="noopener noreferrer" aria-label="Fale conosco no WhatsApp">
      <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bootstrap 5 JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      // Current year
      document.getElementById("gc-year").textContent = new Date().getFullYear();

      // Navbar scroll state
      var nav = document.getElementById("gc-nav");
      function onScroll() {
        if (!nav) return;
        nav.classList.toggle("gc-scrolled", window.scrollY > 40);
      }
      onScroll();
      window.addEventListener("scroll", onScroll, { passive: true });

      // Reveal on scroll
      var io = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (e) {
            if (e.isIntersecting) {
              e.target.classList.add("gc-in");
              io.unobserve(e.target);
            }
          });
        },
        { threshold: 0.12 }
      );
      document.querySelectorAll(".gc-reveal").forEach(function (el) {
        io.observe(el);
      });

      // Contact form -> WhatsApp
      var form = document.getElementById("gc-form");
      if (form) {
        form.addEventListener("submit", function (e) {
          e.preventDefault();
          window.open(
            "https://wa.me/5574991381274?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento.",
            "_blank",
            "noopener,noreferrer"
          );
        });
      }
    </script>

@endsection
