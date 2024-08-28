<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fábio Lima</title>
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
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary"
            style="border-bottom: 1px solid #4b30c0;  background: #212529 !important; font-size: 17px;
       position:fixed; width: 100vw;">
            <div class="container">
                <a class="navbar-brand" href="#" style="color: #fff;"><span class="tagsLogo">
                        < </span>Fábio<span class="tagsLogo">/></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projetos"><i class="fa-solid fa-sliders"></i> Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#habilidades"><i class="fa-brands fa-react"></i> Habilidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato"> <i class="fa-regular fa-message"></i> Contato</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main">
        <div class="row" id="hoome">
            <h1><span class="animate__animated animate__fadeIn animate__delay-1s">Oi, </span> <span
                    class="animate__animated animate__fadeIn animate__delay-2s">eu sou Fábio
                    Lima</span> </h1>

            <h4 class="animate__animated animate__fadeIn animate__delay-2s">Desenvolvedor de Software<span
                    class="fullstack"> FullStack</span></h4>
            <div class="row btncontato">
                <div class="container">
                    <div class="center">
                        <a href="#contato">
                            <button class="animate__animated animate__fadeIn animate__delay-2s btn">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span> <i class="fa-brands fa-github"></i> GitHub</span>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
            <div class="btncontato">
                <div class="container">
                    <div class="center">
                        <a href="#contato">
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
            </div>

        </div>
        <div class="container">
            <div class="row mt-3" id="projetos">
                <h2>Projetos</h2>
                <div class="row cardProject mt-3 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-md-6">
                        <div class="screenshot">
                            <img src="{{ asset('assets/img/1.jpg') }}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 text-#fff">
                        <h3 class="tituloProjeto">Titulo Projeto</h3>
                        <div class="descricao">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus magnam
                            assumenda praesentium quibusdam ipsa magni ab culpa porro tempore saepe, ex debitis autem
                            quam, at voluptatum, harum tempora vero!
                        </div>
                        <div class="row actionsBtn">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-eye"></i> DEPLOY</span>
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

                    <div class="col-md-6 text-#fff">
                        <h3 class="tituloProjeto">Titulo Projeto</h3>
                        <div class="descricao">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus magnam
                            assumenda praesentium quibusdam ipsa magni ab culpa porro tempore saepe, ex debitis autem
                            quam, at voluptatum, harum tempora vero!
                        </div>
                        <div class="row actionsBtn">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-eye"></i> DEPLOY</span>
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
                    <div class="col-md-6">
                        <div class="screenshot">
                            <img src="{{ asset('assets/img/1.jpg') }}" class="w-100">
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="row cardProject mt-3 mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-md-6">
                        <div class="screenshot">
                            <img src="{{ asset('assets/img/1.jpg') }}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 text-#fff">
                        <h3 class="tituloProjeto">Titulo Projeto</h3>
                        <div class="descricao">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus magnam
                            assumenda praesentium quibusdam ipsa magni ab culpa porro tempore saepe, ex debitis autem
                            quam, at voluptatum, harum tempora vero!
                        </div>
                        <div class="row actionsBtn">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="center">
                                        <button class="btn">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-eye"></i> DEPLOY</span>
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
            </div>
            <div class="row mt-4" id="habilidades">

                <h2>Habilidades</h2>
                <div class="row">
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/html.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>HTML</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/css.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>CSS</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/js.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>JavaScript</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/php.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>PHP</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/mysql.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>Mysql</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/bootstrap.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>Bootstrap</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/laravel.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>Laravel</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="iconSkill">
                                <img src="{{ asset('assets/img/wordperss.png') }}" class="w-100">
                            </div>
                            <div class="titleSkill">
                                <p>Wordpress</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>



            </div>
            <div class="row mt-4" id="contato">
                <h2>Contato</h2>
                <div class="row contatos">
                    <div class="degrade"></div>
                    <div class="col-md-6"  data-aos="fade-right" data-aos-duration="1000">
                        <div class="imagemAtendimento">
                            <img src="{{asset('assets/img/atendimento.png')}}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="formulario">
                            <form action="#" method="post">
                                <input type="text" name="nome" id="nome" class="form-control mb-3" placeholder="Digite seu nome">
                                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Digite seu e-mail">


                                <textarea name="mensagem" id="" cols="30" rows="5" class="form-control mb-3" placeholder="digite sua mensagem"></textarea>

                                <div class="container">
                                    <div class="center">
                                        <button class="btn btn-success">
                                            <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                            </svg>
                                            <span><i class="fa-solid fa-paper-plane"></i> Enviar</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>



    </script>
</body>

</html>
