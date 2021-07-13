<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Turno</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet" />
        <!-- Plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/html5-device-mockups/3.2.1/dist/device-mockups.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body id="page-top">
   
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('img/logonombre.png')}}"  height="90"
             alt="Turno"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#download">Descargar</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#features">Características</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead">
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-7 my-auto">
                        <div class="header-content mx-auto">
                            <h1 class="mb-5">Turno es una app para la administración de tus citas previas, te hará aprovechar tu tiempo al máximo en lo realmente importante</h1>
                            <a class="btn btn-outline-light py-3 px-4 rounded-pill js-scroll-trigger" href="#download">Comienza ahora gratis!</a>
                        </div>
                    </div>
                    <div class="col-lg-5 my-auto">
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhone6" data-orientation="portrait" data-color="white">
                                <div class="screen">
                                    <!-- PUT CONTENTS HERE-->
                                    <img class="img-fluid" src="{{ asset('/img/demo-screen.jpg' ) }}" alt="..." />
                                </div>
                                <div class="button"><!-- You can hook the "home button" to some JavaScript events or just remove it--></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="download bg-primary text-center" id="download">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2 class="section-heading">Se parte de la innovación con tu agenda digital!</h2>
                        <p>Nuestra app de está disponible para cualquier dispositivo móvil! Descargala y comienza ahora!</p>
                        <div class="badges">
                            <a class="badge-link" href="https://play.google.com/store/apps/details?id=com.velezsoft.turnoAdmin"><img src="{{ asset('/img/google-play-badge.svg' ) }}" alt="..." /></a>
                            <!-- <a class="badge-link" href="#!"><img src="{{ asset('/img/app-store-badge.svg' ) }}" alt="..." /></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features" id="features">
            <div class="container">
                <div class="section-heading text-center">
                    <h2>Opciones Ilimitadas, opciones a tu medida</h2>
                    <p class="text-muted">Checa todo lo que puedes hacer en Turno!</p>
                    <hr />
                </div>
                <div class="row">
                    <div class="col-lg-4 my-auto">
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhone6" data-orientation="portrait" data-color="white">
                                <div class="screen">
                                    <!-- PUT CONTENTS HERE-->
                                    <img class="img-fluid" src="/img/demo-screen.jpg" alt="..." />
                                </div>
                                <div class="button"><!-- You can hook the "home button" to some JavaScript events or just remove it--></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 my-auto">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                    <i class="bi bi-people"></i>
                                        <h3>Gestiona los turnos</h3>
                                        <p class="text-muted">Administra las citas previas de tus espacios!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                    <i class="bi bi-pin-map-fill"></i>
                                        <h3>Posicionamiento</h3>
                                        <p class="text-muted">Tus clientes te encontrarán en el mapa o en una lista con facilidad cuando estén cerca de ti o te busquen</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                    <i class="bi bi-gift"></i>
                                        <h3>Gratis</h3>
                                        <p class="text-muted">Tendrás la aplicación gratis para cuando quieras utilizarla! **</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                    <i class="bi bi-clock"></i>
                                        <h3>Aprovecha tu tiempo</h3>
                                        <p class="text-muted">Deja a Turno hacer el trabajo de agenda por ti!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                    <i class="bi bi-gear"></i>
                                        <h3>Fácil de configurar</h3>
                                        <p class="text-muted">Intuitiva para que la aplicación haga todo por ti!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                    <i class="bi bi-headset"></i>
                                        <h3>Soporte Siempre</h3>
                                        <p class="text-muted">Siempre contarás con alguien que te ayude con cualquier inconveniente!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="cta-content">
                <div class="container">
                    <h2>
                        Deja de agendar.
                        <br />
                        Que Turno lo haga por ti!
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill js-scroll-trigger" href="#contact">Comienza ahora!</a>
                </div>
            </div>
            <div class="overlay"></div>
        </section>
        <section class="contact bg-primary" id="contact">
            <div class="container">
                <h2>
                    We
                    <i class="text-danger fas fa-heart"></i>
                    new friends!
                </h2>
                <ul class="list-inline list-social">
                    <li class="list-inline-item social-twitter">
                        <a href="https://twitter.com/turnomx"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item social-facebook">
                        <a href="https://www.facebook.com/turno.mx"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/turno.mx"><img src="/img/logoinstagram.png" style="

    vertical-align: top;
    height: 80px;
    width: 80px;
"></a>
                    </li>
                </ul>
            </div>
        </section>
        <footer>
            <div class="container">
                <p>&copy; Turno 2021. Todos los derechos reservados.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#!">Privacidad</a></li>
                    <li class="list-inline-item"><a href="#!">Terminos</a></li>
                    <li class="list-inline-item"><a href="#!">FAQ</a></li>
                </ul>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Custom scripts for this template-->
        <script src="js/scripts.js"></script>
    </body>
</html>
