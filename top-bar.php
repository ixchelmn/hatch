<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
    <meta name="author" content="Ixchel Valentina Martinez Noreña">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/hatch/src/img/iconoSitio-03.png" type="image/x-icon">
    <title>Hatch Atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/hatch/src/style/home.css">
    <link rel="stylesheet" href="/hatch/src/style/fontawesome-free-5.15.3-web/css/all.css">

</head>

<nav class="navbar navbar-expand-lg navbar-light navbar-color">
    <!-- Inicia codigo para la barra de navegacion -->
    <div class="container-fluid nav-bar-brand-container">
        <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
        <a class="navbar-brand" href="/hatch/index.php">
            <img src="/hatch/src/img/logoHatch-02.png" alt="" width="80" height="110" class="d-inline-block align-text-center">
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
                <form class="d-flex">
                    <!--barra de busqueda -->
                    <input class="form-control no-border" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success no-border pink-button" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
            <!-- contenedor de log in / Registrate -->
            <ul class="navbar-nav mb-2 mb-lg-0"></ul>


            <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) { ?>
                <a class="normal-link" href="/hatch/pages/es/Log-in/cerrar-sesion.php">Log Out</a>
            <?php } else { ?>
                <a class="normal-link" href="/hatch/pages/es/Log-in/log-in.php">Log In</a>
                <a href="/hatch/pages/es/Log-in/registrate.php" button class="btn btn-outline-success no-border pink-button" type="submit">Registrate</button></a>
            <?php } ?>



            <a href="/hatch/pages/es/Carrito/carrito.php" title="cart-icon"><i class="fas fa-shopping-cart icon-spacing-cart px-2"></i></i></a>

        </div>
    </div>
</nav>