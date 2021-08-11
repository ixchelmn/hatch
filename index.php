<?php
include("./app/con_db.php");
$getProductsSql = "SELECT idproducto, nombre, Precio_Unitario, imagen FROM producto";
$result = mysqli_query($link, $getProductsSql);
$productRows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
    <meta name="author" content="Ixchel Valentina Martinez Noreña">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="src/img/iconoSitio-03.png" type="image/x-icon">
    <title>Hatch Atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/home.css">
    <link rel="stylesheet" href="src/style/fontawesome-free-5.15.3-web/css/all.css">

</head>

<body>
    <header>
        <?php
        include("top-bar.php");
        ?>
        <!--Termina codigo barra de navegacion -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/cover2.png" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="src/img/slider2-01.png" class="d-block w-100" alt="...">
                </div>
            </div>


            <div class="slider1-container">
                <p class="slider1-text">¡HATCHBOX DEL MES!</p>
                <a href="/hatch/pages/es/Compra/suscribite.php" button class="btn btn-outline-success pink-button slider1-suscribe-button" type="submit">Suscribete</button></a>
                <a href="/hatch/pages/es/Compra/suscribite.php" button class="btn btn-outline-success white-button slider2-suscribe-button" type="submit">¡Echale un
                    Ojo!</button></a>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <header>

            <main>
                <div class="marketing-text">
                    <h1>Obtené Diseños Únicos Creados por Artistas Locales</h1>
                    <span>
                        ¡Buscá, Elegí y Comprá!
                    </span>
                </div>

                <div class="img-section3-container">
                    <div>
                        <h1 class="recommended-title-text flex-center">
                            Productos recomendados para ti
                        </h1>
                    </div>
                    <div class="recommended-img-container">

                        <?php
                        foreach ($productRows as $row) {
                            echo '<div class="flex-column flex-center ">';
                            echo '<span class="nombre-producto">' . $row['nombre'] . '</span>';
                            echo '<span class="nombre-producto">' . $row['Precio_Unitario'] . ' $</span>';
                            echo '<img width="240" height="260" class="showcase-img" src="' . $row['imagen'] . '" alt="" />';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="img-section2-container">
                    <div class="marketing-text">

                        <div class="row align-items-center">
                            <div class="col">
                                One of three columns
                            </div>
                            <div class="col">
                                One of three columns
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-section1-container">
                    <div class="showcase-img-container">
                        <img width="500" height="200" class="showcase-img" src="./src/img/lobotomy I.jpg" alt="" />
                        <div>
                            <h1 class="showcase-title-text">
                                Spotlight del Artista
                            </h1>
                            <h3 class="category-subtitle-text">Descripcion del Artista</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="showcase-img-container img-section2-container">
                        <div>
                            <h1 class="showcase-title-text">
                                Spotlight del Artista
                            </h1>
                            <h3 class="category-subtitle-text">Descripcion del Artista</h3>
                        </div>
                        <img width="500" height="200" class="showcase-img" src="./src/img/lobotomy I.jpg" alt="" />

                    </div>
                </div>

                <div class="img-section4-container">
                    <div class="call-to-action-text">
                        <div class="row align-items-center">
                            <div class="col">
                                <h1>
                                    Unete a una comunidad de usuarios apasionados por el arte, diseño y el estilo.
                                </h1>
                            </div>
                            <div class="col">
                                <a href="/hatch/pages/es/Compra/suscribite.php" button class="btn btn-outline-success pink-button slider1-suscribe-button" type="submit">Suscribete</button></a>
                                <a href="/hatch/pages/es/Compra/suscribite.php" button class="btn btn-outline-success white-button slider2-suscribe-button" type="submit">¡Contactanos!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <nav class="navbar navbar-expand-lg navbar-light navbar-color">
                    <!-- Inicia codigo para la barra de navegacion -->
                    <div class="container-fluid nav-bar-brand-container">
                        <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
                        <a class="navbar-brand" href="index.php">
                            <img src="src/img/Asset 1.svg" alt="" width="80" height="110" class="d-inline-block align-text-center">
                            Hatch Atelier
                        </a>

                        <div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">
                                <!-- contenedor enlaces centrales -->
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <!-- inicia drop down -->
                                    <li class="nav-item dropdown">
                                        <!-- primer item drop down -->
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compra
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Compra/ropa.php">Ropa</a></li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Compra/stickers-posters.php">Stickers
                                                    y Posters</a></li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Compra/papeleria.php">Papeleria</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Compra/accesorios.php">Accesorios</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Compra/suscribite.php">Suscribite</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Vende tus Diseños
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Vende-tus-diseños/comienza-a-vender.php">¡Comienza a
                                                    Vender!</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Vende-tus-diseños/como-subir-disenos.php">¿Cómo subir tus
                                                    Diseños?</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Acerca de Nosotros
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Acerca-de-Nosotros/que-es-hatch.php">¿Qué es Hatch
                                                    Atelier?</a></li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Vende-tus-diseños/comienza-a-vender.php">Vende tus
                                                    Diseños</a></li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Acerca-de-Nosotros/contactanos.php">Contáctanos</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="https://www.ixchelmartinez.com">Blog
                                                    Ixchel
                                                    martinez</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ayuda
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Ayuda/tutoriales-de-compra.php">Tutoriales de Compra</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Ayuda/entregas.php">Entregas</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Vende-tus-diseños/como-subir-disenos.php">¿Cómo subir tus
                                                    Diseños?</a></li>
                                            <li><a class="dropdown-item" href="/hatch/pages/es/Acerca-de-Nosotros/contactanos.php">Contáctanos</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- Termina dropdown -->
                            </div>
                        </div>

                        <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
                            <!-- contenedor de log in / Registrate -->
                            <ul class="navbar-nav mb-2 mb-lg-0"></ul>
                            <a class="normal-link" href="/hatch/pages/es/Log-in/log-in.php">Log In</a>
                            <a href="/hatch/pages/es/Log-in/registrate.php" button class="btn btn-outline-success no-border pink-button" type="submit">Registrate</button></a>
                            <a href="/hatch/pages/es/Carrito/carrito.php" title="cart-icon"><i class="fas fa-shopping-cart icon-spacing-cart px-2"></i></i></a>

                        </div>
                    </div>
                </nav>
                <div style="background-color: #F3F0E8; width: 100%; display: flex; justify-content: space-evenly;">
                    <nav>
                        <a href="https://www.linkedin.com/in/ixchel-martinez-788b071bb/@gmail.com" style="text-decoration: none;"><img src="src/style/fontawesome-free-5.15.3-web/svgs/brands/linkedin-in.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                        <a href="https://www.facebook.com/Hatch-Atelier-319841905408913" style="text-decoration: none;"><img src="src/style/fontawesome-free-5.15.3-web/svgs/brands/facebook-f.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                        <a href="https://www.instagram.com/ixchelmn/?hl=en" style="text-decoration: none;"><img src="src/style/fontawesome-free-5.15.3-web/svgs/brands/instagram-square.svg" alt="Redes Sociales" style="width:20px; height: 20px;">
                        </a>
                    </nav>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>