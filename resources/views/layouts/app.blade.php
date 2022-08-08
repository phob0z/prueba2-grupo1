<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portafolio Grupo 1 - Twitter</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">Grupo 1 - Twitter</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    @if (Request::is('/'))
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="#portafolio">Portafolio</a>
                    @endif
                    <li class="nav-item mx-0 mx-lg-1">
                        @if (Route::is('sugerencias'))
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Sugerencias</a>
                        @else
                            <a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="{{ route('sugerencias') }}">Sugerencias</a>
                        @endif

                        @guest
                            @if (Route::is('login'))
                        <li class="nav-item py-2 mx-0 mx-lg-1"><a class="btn btn-primary btn-small text-capitalize"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        @elseif (Route::is('register'))
                        <li class="nav-item py-2 mx-0 mx-lg-1"><a class="btn btn-primary btn-small text-capitalize"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        @elseif (Request::is('password/reset'))
                        <li class="nav-item py-2 mx-0 mx-lg-1"><a class="btn btn-primary btn-small text-capitalize"
                                href="{{ route('login') }}">{{ __('Back') }}</a>
                            @endif
                        @else
                        <li class="nav-item py-2 mx-0 mx-lg-1">
                            <form action="{{ route('logout') }}" method="POST">
                                @method('POST')
                                @csrf
                                <button type="submit" value="Cerrar" class="btn btn-danger">{{ __('Logout') }}</button>
                            </form>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
    @if (Request::is('/'))
        <div id="myCarousel" class="page-section carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1" style="background-color: #000080"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    style="background-color: #000080"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="100%" height="350px" src="https://i.postimg.cc/L6ktCc5v/Banner-EPN.png"
                        alt="">
                    <div class="container">
                        <div class="carousel-caption text-start text-dark">
                            <h1>
                                <p>Prueba del 2do Bimestre</p>
                            </h1>
                            <p>Notificaciones y Twitter</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" height="350px" src="https://i.postimg.cc/dVFttXq7/Banner-EPN2.png"
                        alt="">
                    <div class="container">
                        <div class="carousel-caption text-dark">
                            <h2>Manejo de imágenes en Dropbox</h2>
                            <h2>Formulario de contacto</h2>
                            <h2>Implementación de login con Twitter</h2>
                            <h2>HTTPS</h2>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portafolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portafolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @yield('content2')
                </div>
            </div>
        </section>
        <!-- About Section-->
        {{-- <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto">
                        <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download
                            includes the complete source files including HTML, CSS, and JavaScript as well as optional
                            SASS
                            stylesheets for easy customization.</p>
                    </div>
                    <div class="col-lg-4 me-auto">
                        <p class="lead">You can create your own custom avatar for the masthead, change the icon in
                            the
                            dividers, and add your email address to the contact form to make it fully functional!</p>
                    </div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </div>
            </div>
        </section> --}}
    @endif
    @yield('content')
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Integrantes</h4>
                    <p class="lead mb-0">
                        Raúl Tenorio<br>
                        Leonel Molina<br>
                        Ariel Calderón<br>
                        Dastin Chávez<br>
                        Jean Pierre Fuentes<br>
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0 ">
                    <h4 class="text-uppercase mb-4">En las redes</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Acerca de Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance se puede usar libremente, es una plantilla bajo la licencia MIT, creada por
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                </div>
                <div class="col">
                    <small>Copyright &copy; Grupo 1 - 2022</small>
                </div>
                <div class="col">
                    @guest
                        @if (Request::is('/'))
                            <a class="btn btn-primary btn-small" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
