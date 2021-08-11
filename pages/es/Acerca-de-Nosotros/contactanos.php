<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
    <meta name="author" content="Ixchel Valentina Martinez Noreña">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/hatch/src/img/iconoSitio-03.png" type="image/x-icon">
    <title>Hatch Atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/hatch/src/style/contactanos.css">
    <link rel="stylesheet" href="/hatch/src/style/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-color">
            <!-- Inicia codigo para la barra de navegacion -->
            <div class="container-fluid nav-bar-brand-container">
                <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
                <a class="navbar-brand" href="/index.php">
                    <img src="/hatch/src/img/logoHatch-02.png" alt="" width="80" height="110"
                        class="d-inline-block align-text-center">
                    Hatch Atelier
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">
                    <!-- contenedor enlaces centrales -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <!-- inicia drop down -->
                        <li class="nav-item dropdown">
                            <!-- primer item drop down -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Compra
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/hatch/pages/es/Compra/ropa.php">Ropa</a></li>
                                <li><a class="dropdown-item" href="/hatch/pages/es/Compra/stickers-posters.php">Stickers y
                                        Posters</a></li>
                                <li><a class="dropdown-item" href="/hatch/pages/es/Compra/papeleria.php">Papeleria</a></li>
                                <li><a class="dropdown-item" href="/hatch/pages/es/Compra/accesorios.php">Accesorios</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/hatch/pages/es/Compra/suscribite.php">Suscribete</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Vende tus Diseños
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href="/hatch/pages/es/Vende-tus-diseños/comienza-a-vender.php">¡Comienza a
                                        Vender!</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item"
                                        href="/hatch/pages/es/Vende-tus-diseños/como-subir-disenos.php">¿Cómo subir tus
                                        Diseños?</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Acerca de Nosotros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/hatch/pages/es/Acerca-de-Nosotros/que-es-hatch.php">¿Qué
                                        es Hatch Atelier?</a></li>
                                <li><a class="dropdown-item"
                                        href="/hatch/pages/es/Vende-tus-diseños/comienza-a-vender.php">Vende tus Diseños</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="/hatch/pages/es/Acerca-de-Nosotros/contactanos.php">Contáctanos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.ixchelmartinez.com">Blog Ixchel
                                        martinez</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ayuda
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/hatch/pages/es/Ayuda/tutoriales-de-compra.php">Tutoriales
                                        de Compra</a></li>
                                <li><a class="dropdown-item" href="/hatch/pages/es/Ayuda/entregas.php">Entregas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item"
                                        href="/hatch/pages/es/Vende-tus-diseños/como-subir-disenos.php">¿Cómo subir tus
                                        Diseños?</a></li>
                                <li><a class="dropdown-item"
                                        href="/hatch/pages/es/Acerca-de-Nosotros/contactanos.php">Contáctanos</a></li>
                            </ul>
                        </li>
                    </ul> <!-- Termina dropdown -->
                    <form class="d-flex form-margin">
                        <!--barra de busqueda -->
                        <input class="form-control no-border" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success no-border pink-button" type="submit">Search</button>
                    </form>
                </div>

                <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0"></ul>
                    <a class="normal-link" href="/hatch/pages/es/Log-in/log-in.php">Log In</a>
                    <a href="/hatch/pages/es/Log-in/registrate.php" button
                        class="btn btn-outline-success no-border pink-button" type="submit">Registrate</button></a>
                </div>
            </div>
        </nav>
        <!---termina barra de navegacion-->
        <section>
            <!---inicia seccion en construccion-->
            <main>
                <div class="jumbotron Jumbotron2-main-format">
                    <h1 class="display-4 Jumbotron2-title-format">Seccion en Construcción</h1>
                    <p class="lead Jumbotron-lead-text flex-center">Pronto actualizaremos
                    </p>
                    <div class="flex-center field-width">
                        <img src="http://placehold.jp/f3d8cd/f0637a/500x500.png?text=En%20Proceso" alt="" width="400px"
                            height="300">
                    </div>
                    <hr class="my-4">
                    <p class="Jumbotron-lead-text flex-center">Muestrale tus diseños al mundo y deja que enamoren</p>
                    <p class="lead">
                    <div class="field-width flex-center">
                    </div>
                    </p>
                </div>
        </section>


        <footer>
            <div style="background-color: rgba(240,99,122,255); width: 100%;">
                <!--contenedor principal-->
                <div style="background-color: #f1afa9; width: 100%; display: flex; justify-content: space-evenly;">
                    <nav>
                        <a href="https://www.linkedin.com/in/ixchel-martinez-788b071bb/@gmail.com"
                            style="text-decoration: none;"><img
                                src="/hatch/src/style/fontawesome-free-5.15.3-web/svgs/brands/linkedin-in.svg"
                                alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                        <a href="https://www.facebook.com/Hatch-Atelier-319841905408913"
                            style="text-decoration: none;"><img
                                src="/hatch/src/style/fontawesome-free-5.15.3-web/svgs/brands/facebook-f.svg"
                                alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                        <a href="https://www.instagram.com/ixchelmn/?hl=en" style="text-decoration: none;"><img
                                src="/hatch/src/style/fontawesome-free-5.15.3-web/svgs/brands/instagram-square.svg"
                                alt="Redes Sociales" style="width:20px; height: 20px;">
                        </a>
                    </nav>
                </div>
                <div class="audio-controls flex-center">
                    <p class="normal-text">Creado por: Ixchel V. Martinez N.</p>
                    <audio controls>
                        <source src="/hatch/src/audio/jpn - bloom. [].mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>

            </div>
            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

</body>

</html>