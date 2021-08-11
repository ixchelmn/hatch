<!DOCTYPE html>
<html lang="en">

<?php
include("../../../top-bar.php");
?>


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
    <link rel="stylesheet" href="/hatch/src/style/suscribite.css">
    <link rel="stylesheet" href="/hatch/src/style/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <header>
        <!---termina barra de navegacion-->
        <section>
            <!---inicia seccion de articulos-->
            <main>
                <div class="jumbotron Jumbotron-main-format">
                    <h1 class="display-4 Jumbotron-title-format">¡Elige tu plan!</h1>
                    <p class="lead Jumbotron-lead-text flex-center">¿Quieres recibir tu cajita cada vez al mes? ¿Por
                        seis meses? ¿Un año?</p>
                    <hr class="my-4">
                    <p class="Jumbotron-lead-text flex-center">¿No tienes cuenta? ¡Haz click para crearla!</p>
                    <p class="lead">
                    <div class="field-width flex-center">
                        <a class="btn btn-primary btn-lg pink-button" href="/hatch/pages/es/Log-in/registrate.php"
                            role="button">Crea tu cuenta</a>
                    </div>
                    </p>
                </div>
        </section>
        <section>
            <!---inicia seccion de articulos-->
            <main>
                <section>
                    <div class="row flex-center">
                        <!---inicia grid de imagenes fila-->
                        <div class="col-sm-6 grid-card-format">
                            <div class="card">
                                <div class="card-body format-grid-card-body">
                                    <h5 class="card-title format-card-title">Plan A</h5>
                                    <img src="http://placehold.jp/f3d8cd/f0637a/500x500.png?text=En%20Proceso" class="card-img-top"
                                        alt="">
                                    <p class="card-text">25 USD por mes, tu decides, puedes cancelar cuando quieras o pagar mes a mes</p>
                                    <a href="/hatch/pages/es/Carrito/carrito.php" class="btn btn-primary pink-button">Agregar al
                                        Carrito</a>
                                </div>
                            </div>
                        </div>
                        <!--termina -->
                        <div class="col-sm-6 grid-card-format">
                            <div class="card">
                                <div class="card-body format-grid-card-body">
                                    <h5 class="card-title format-card-title">Plan B</h5>
                                    <img src="http://placehold.jp/f3d8cd/f0637a/500x500.png?text=En%20Proceso" class="card-img-top"
                                        alt="">
                                    <p class="card-text">Paga tu Hatch Box por tres meses, 23 USD Por mes, te ahorras 3 USD</p>
                                    <a href="/hatch/pages/es/Carrito/carrito.php" class="btn btn-primary pink-button">Agregar al
                                        Carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 grid-card-format">
                            <div class="card">
                                <div class="card-body format-grid-card-body">
                                    <h5 class="card-title format-card-title">Plan C</h5>
                                    <img src="http://placehold.jp/f3d8cd/f0637a/500x500.png?text=En%20Proceso" class="card-img-top"
                                        alt="">
                                    <p class="card-text">Paga tu Hatch Box por tres meses, 22 USD Por mes, te ahorras 10 USD</p>
                                    <a href="/hatch/pages/es/Carrito/carrito.php" class="btn btn-primary pink-button">Agregar al
                                        Carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
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