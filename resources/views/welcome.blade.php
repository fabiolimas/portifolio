<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genesis Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="d-flex align-items-center ">
            <i class="ti ti-circle-check-filled me-2"></i>
            <span>{{ session('success') }} </span>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="d-flex align-items-center ">
            <i class="ti ti-alert-triangle-filled me-2"></i>
            <span>Ouve um erro no formulário! </span>
        </div>
    </div>
@endif
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary"
            style="border-bottom: 1px solid #4b30c0;  background: #212529 !important; font-size: 17px;
       position:fixed; width: 100vw; z-index:1;">
            <div class="container">
                <a class="navbar-brand" href="#" style="color: #fff;"><span class="tagsLogo">
                        < </span>GenesisCode<span class="tagsLogo">/></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#hoome"><i
                                    class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projetos"><i class="fa-brands fa-react"></i> Projetos</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#habilidades"> Habilidades</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#contato"> <i class="fa-regular fa-message"></i> Contato</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main">

        <section class="row" id="hoome">
            <div id="particles-js"></div>
            <h1> <span
                    class="animate__animated animate__fadeIn animate__delay-2s">Onde o código dá vida às ideias.
                   </span> </h1>

           <h4 class="animate__animated animate__fadeIn animate__delay-2s"> Desenvolvemos sistemas e sites de alta performance para o seu negócio crescer no digital!<span
                    class="fullstack"><br> Solicite um orçamento e comece hoje mesmo</span></h4>
            <div class="row btncontato">
                <div class="container">
                    <div class="center">
                        <a href="#contato" target="_blank">
                            <button class="animate__animated animate__fadeIn animate__delay-2s btn">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span> Entre em contato </span>
                            </button>
                        </a>
                        {{-- <a href="https://github.com/fabiolimas" target="_blank">
                            <button class="animate__animated animate__fadeIn animate__delay-2s btn">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span> <i class="fa-brands fa-github"></i> GitHub</span>
                            </button>
                        </a> --}}
                    </div>
                </div>

            </div>
            {{-- <div class="btncontato">
                <div class="container">
                    <div class="center">
                        <a href="https://www.linkedin.com/in/f%C3%A1bio-lima-739b19181/" target="_blank">
                            <button class="animate__animated animate__fadeIn animate__delay-2s btn">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span> <i class="fa-brands fa-linkedin"></i> LinkedIn</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div> --}}

        </section>
        <div class="skills">
            <marquee><img src="{{ asset('assets/img/html.png') }}" class="w-100"> <img
                    src="{{ asset('assets/img/css.png') }}" class="w-100"><img src="{{ asset('assets/img/js.png') }}"
                    class="w-100"><img src="{{ asset('assets/img/php.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/mysql.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/bootstrap.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/laravel.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/wordperss.png') }}" class="w-100">
                    <img src="{{ asset('assets/img/github.png') }}" class="w-100"> | <img
                    src="{{ asset('assets/img/html.png') }}" class="w-100"> <img
                    src="{{ asset('assets/img/css.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/js.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/php.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/mysql.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/bootstrap.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/laravel.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/wordperss.png') }}" class="w-100">
                    <img src="{{ asset('assets/img/github.png') }}" class="w-100"> | <img
                    src="{{ asset('assets/img/html.png') }}" class="w-100"> <img
                    src="{{ asset('assets/img/css.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/js.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/php.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/mysql.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/bootstrap.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/laravel.png') }}" class="w-100"><img
                    src="{{ asset('assets/img/wordperss.png') }}" class="w-100">
                    <img src="{{ asset('assets/img/github.png') }}" class="w-100"> </marquee>
        </div>
        <div class="container">

            <section class="row mt-3" id="projetos">
                <div class="row row d-flex justify-content-center align-itens-center">
                    <h2>Projetos</h2>
                </div>

                <div class="row cardProject mt-3 mb-3"  data-aos="fade-right" data-aos-duration="1000">

                    <div class="col-md-6 imgprojeto">
                        <div class="screenshot">
                            <img src="{{ asset('assets/img/campeonato_gamer/home.PNG') }}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 text-#fff">
                        <h3 class="tituloProjeto">Campeonato Gamer</h3>
                        <div class="descricao">
                           Sistema de gerenciamento de campeontos online, sistema completo com cadastro de usuários,
                           gerenciamento de campeonatos, com atribuição de rankings dos participantes mediante
                           o seu desempenho nos jogos.

                        </div>
                        <div class="row">
                            @php
                                $array = ['PHP', 'Laravel', 'Javascript'];
                            @endphp
                            @foreach ($array as $item)
                                <div class="col-md-3 tec">{{ $item }}</div>
                            @endforeach
                        </div>
                        <div class="row actionsBtn">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="center">
                                        <a href="https://painel.campeonatogamer.com.br/" target="_blank"><button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-eye"></i> DEPLOY</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="container">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-brands fa-github"></i> GITHUB</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- 2 --}}
                <div class="row cardProject mt-3 mb-3" data-aos="fade-right" data-aos-duration="1000">

                    <div class="col-md-6 imgprojeto">
                        <div class="screenshot">
                            <img src="{{ asset('assets/img/dsf/home.PNG') }}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 text-#fff">
                        <h3 class="tituloProjeto">DSF</h3>
                        <div class="descricao">
                           Sistema gerenciador de exames, contando com controle de usuarios por nivel de acesso, cadastro de clientes,
                           cadastro de exames, agendamentos, e geração de resultado de exame em PDF.
                        </div>
                        <div class="row">
                            @php
                                $array = ['PHP', 'Laravel', 'Javascript'];
                            @endphp
                            @foreach ($array as $item)
                                <div class="col-md-3 tec">{{ $item }}</div>
                            @endforeach
                        </div>
                        <div class="row actionsBtn">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="center">
                                        <a href="https://dsf.indutivatecnologia.com/" target="_blank">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-eye"></i> DEPLOY</span>
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="container">
                                    <div class="center">
                                        <a href="https://github.com/fabiolimas/dsf_farmacias_laravel" target="_blank">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-brands fa-github"></i> GITHUB</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                {{-- 3 --}}
                <div class="row cardProject mt-3 mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <div class="col-md-6">
                        <div class="screenshot imgprojeto">
                            <img src="{{ asset('assets/img/ibrea/home.PNG') }}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 text-#fff">
                        <h3 class="tituloProjeto">Sistema Ibrea</h3>
                        <div class="descricao">
                           Site editavel com CMS proprio, desenvolvido para fazer a edição das paginas de forma dinamica, utilizando
                           o famework Laravel cada seção do site pode ser gerenciada de forma individual.
                        </div>
                        <div class="row">
                            @php
                                $array = ['PHP', 'Laravel', 'Javascript'];
                            @endphp
                            @foreach ($array as $item)
                                <div class="col-md-3 tec">{{ $item }}</div>
                            @endforeach
                        </div>
                        <div class="row actionsBtn">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="center">
                                        <a href="https://aprendizibrea.indutivatecnologia.com/" target="_blank">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-eye"></i> DEPLOY</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="container">
                                    <div class="center"><a href="https://github.com/ibrea/aprendiz" target="_blank">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-brands fa-github"></i> GITHUB</span>
                                        </button></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="row mt-4" id="contato">
                <div class="row row d-flex justify-content-center align-itens-center">
                    <h2>Contato</h2>
                </div>
                <div class="row contatos">

                    <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="imagemAtendimento">
                            <img src="{{ asset('assets/img/atendimento.png') }}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="formulario">
                                <form action="{{route('send-mail')}}" method="post" data-aos="fade-right" data-aos-duration="1000">
                                    @csrf
                                    <input type="text" name="nome" id="nome" class="form-control mb-3"
                                        placeholder="Digite seu nome" required>
                                    <input type="email" name="email" id="email" class="form-control mb-3"
                                        placeholder="Digite seu e-mail" required>


                                    <textarea name="mensagem" id="" cols="30" rows="5" class="form-control mb-3"
                                        placeholder="digite sua mensagem" required></textarea>

                                        <div class="row">
                                            <div class="col-md-2 conta">
                                                5 + 8 =
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <input type="number" name="result" class="form-control" required>
                                            </div>

                                        </div>
                                        <div class="row">
                                    <div class="container">
                                        <div class="center">
                                            <button class="btn btn-success" type="submit">
                                                <svg width="180px" height="60px" viewBox="0 0 180 60"
                                                    class="border">
                                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                                </svg>
                                                <span><i class="fa-solid fa-paper-plane"></i> Enviar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="footer" style="height: 500px"></section>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll("section");
            const navLi = document.querySelectorAll("nav ul li a");

            window.onscroll = () => {
                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop - sectionHeight / sections.length) {
                        current = section.getAttribute("id");
                    }
                    console.log(sectionHeight);
                });


                navLi.forEach(a => {
                    a.classList.remove("active");
                    if (a.getAttribute("href").includes(current)) {
                        a.classList.add("active");
                    }
                });
            };
        });
    </script>
</body>

</html>
