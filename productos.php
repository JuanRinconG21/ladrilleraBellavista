<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="./assets/img/LogotipoLadrillera.png" />
    <title>Inversiones Bellavista</title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap"
        rel="stylesheet" />
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="./assets/css/style-starter.css" />
    <!--//Template-CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <style>
    .instagram-media {
        max-width: 100%;
        width: 100%;
    }

    .instagram-media blockquote {
        max-width: 540px;
        min-width: 326px;
        margin: 0 auto;
        /* Centrar la publicación */
    }

    .instagram-media div[style*="padding: 16px"] {
        padding: 5% 2%;
        /* Ajustar el padding para una mejor visualización en dispositivos más pequeños */
    }

    .instagram-media div[style*="padding: 19% 0"] {
        padding: 8% 2%;
        /* Ajustar el padding para una mejor visualización en dispositivos más pequeños */
    }

    .instagram-media div[style*="padding: 12.5% 0"] {
        padding: 5% 2%;
        /* Ajustar el padding para una mejor visualización en dispositivos más pequeños */
    }

    .instagram-media div[style*="margin-bottom: 14px"] {
        margin-bottom: 10px;
        /* Reducir el margen inferior para un mejor diseño responsivo */
    }

    #whatsapp-button {
        position: fixed;
        bottom: 30px;
        left: 20px;
        background-color: #ff6600;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(255, 81, 0, 0.1);
        display: flex;
        align-items: center;
        color: white;
        cursor: pointer;
        z-index: 1000;
    }

    #whatsapp-button i {
        font-size: 2em;
    }
    </style>
</head>

<body>
    <div id="whatsapp-button">
        <div id="message-indicator"></div>
        <h1 style="font-size: 11px">
            <a href="https://wa.link/u4knsp" target="_blank" rel="noopener noreferrer">
                <i style="color: white" class="bi bi-whatsapp"></i>
            </a>
        </h1>
    </div>
    <script>
    function toggleNavbarCollapse() {
        // Obtén el elemento con el id "navbarScroll"
        var navbarScroll = document.getElementById("navbarScroll");

        // Verifica si el elemento tiene la clase "collapse" actualmente
        if (navbarScroll.classList.contains("collapse")) {
            // Si la tiene, quítala y añade la clase "show"
            navbarScroll.classList.remove("collapse");
            navbarScroll.classList.add("show");
        } else {
            // Si no la tiene, añádela y quita la clase "show"
            navbarScroll.classList.add("collapse");
            navbarScroll.classList.remove("show");
        }
    }
    </script>
    <section class="w3l-top-header py-3">
        <div class="container">
            <div class="d-grid main-top">
                <div class="top-header-left">
                    <ul class="info-top-gridshny">
                        <li class="info-grid">
                            <div class="info-icon">
                                <span><i class="bi bi-clock"></i></span>
                            </div>
                            <div class="info-text">
                                <p name="h1" id="h1">Lunes - Viernes 07:00:00 - 05:00:00</p>
                                <p name="h2" id="h2">Sábado - 07:00:00 - 12:00:00</p>
                            </div>
                        </li>
                        <li class="info-grid">
                            <div class="info-icon">
                                <span><i class="bi bi-telephone"></i></span>
                            </div>
                            <div class="info-text">
                                <p id="tel1" name="tel1">+57 320 797 1327</p>
                                <p id="tel2" name="tel2">+57 320 797 1318</p>
                            </div>
                        </li>
                        <li class="info-grid">
                            <div class="info-icon">
                                <span><i class="bi bi-geo-alt"></i></span>
                            </div>
                            <div class="info-text">
                                <p>Carretera Cucharalarga Vía La Julia</p>
                                <p>Cartago - Valle del Cauca</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="top-header-right text-lg-right">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/ladrillera.bellavista.58/"><span><i
                                        class="bi bi-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="https://wa.link/u4knsp"><span><i class="bi bi-whatsapp"></i></span></a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/ladrillerabellavista12/" class="instagram mr-0"><i
                                    class="bi bi-instagram"></i><span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <header id="site-header" style="background-image: url(./assets/img/imagesIndex/ba)" class="">
        <div class="container-sm">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <img style="margin-bottom: 4%" sizes="(max-width: 320px) 280px,(max-width: 480px) 440px,800px" srcset="
              ./assets/img/LogotipoLadrillera_b3pikv_c_scale,w_200.png   800w,
              ./assets/img/LogotipoLadrillera_b3pikv_c_scale,w_1070.png 4228w,
              ./assets/img/LogotipoLadrillera_b3pikv_c_scale,w_1400.png 5600w
            " src="./assets/img/LogotipoLadrillera_b3pikv_c_scale,w_1400.png" alt="" />
                <button style="margin-bottom: 2%" class="navbar-toggler collapsed" type="button"
                    data-bs-toggle="collapse" aria-controls="navbarScroll" aria-label="Toggle navigation"
                    onclick="toggleNavbarCollapse()">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <h1>
                    <a class="navbar-brand pe-xl-5 pe-lg-4" style="color: white; margin-left: 4%" href="#">
                        Ladrillera Bellavista
                    </a>
                </h1>

                <div class="mobile-position" style="margin-left: 2%">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <ul class="navbar-nav me-auto mb-2 mb-md-0"></ul>

                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sobre.php">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contacto.php">Contáctanos</a>
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <div class="nav-item text-nowrap">
                            <a class="nav-link px-3 btn btn-style btn-primary" style="color: white;"
                                href=" ./iniciar.php">Iniciar
                                sesión</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <script src="./assets/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <div class="inner-banner py-5 pb-sm-0" style="background-image: url(./assets/img/imagesIndex/produccion1.jpg)">
        <section class="w3l-breadcrumb text-left py-sm-5 pb-0">
            <div class="container" style="margin-top: 8%">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="./index.php">Inicio</a></li>
                            <li class="active">
                                <span class="mx-2"><i class="bi bi-chevron-double-right"></i></span>Productos
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <link rel="stylesheet" href="./assets/css/templatemo-sixteen.css" />

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">TODAS LAS REFERENCIAS</li>
                            <li data-filter=".des">FAROLES</li>
                            <li data-filter=".dev">ESTRUCTURALES</li>
                            <li data-filter=".gra">OTROS PRODUCTOS</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/LADRILLOFAROLLISO10X20X30-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <div class="col md-2">
                                            <h5 style="color: #ff6800">LADRILLO FAROL LISO</h5>
                                            <p class="fs-6">
                                                Dimensiones: 10X20X30 <br />
                                                Rendimiento: 15,5 Und/m2
                                            </p>
                                            <a href="https://wa.link/4auhy4"><img width="15%;"
                                                    src="./assets/img/watrans.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/FAROLRAYADO10X20X30PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO FAROL RAYADO</h5>
                                        <p class="fs-6">
                                            Dimensiones: 10X20X30 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/CARAVISTA7X10X24-PhotoRoom.png" alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO CARAVISTA 7</h5>
                                        <p class="fs-6">
                                            Dimensiones: 7X10X24 <br />
                                            Rendimiento: 59 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/DIVISION7X20X30PhotoRoom.png" alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO FAROL DIVISIÓN</h5>
                                        <p class="fs-6">
                                            Dimensiones: 7X10X24 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTU6X12X24-PhotoRoom.png" alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800; font-size: 115%">
                                            LADRILLO CARAVISTA ESTRUCTURAL
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 6X12X24 <br />
                                            Rendimiento: 59 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/LADRILLOFAROLRAYADO12X20X30PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO FAROL RAYADO</h5>
                                        <p class="fs-6">
                                            Dimensiones: 12X20X30 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/DIVISORIO11,5X23X33-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO FAROL DIVISORIO</h5>
                                        <p class="fs-6">
                                            Dimensiones: 11,5X23X33 <br />
                                            Rendimiento: 12,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/LADRILLOFAROLLISO12X20X30-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO FAROL LISO</h5>
                                        <p class="fs-6">
                                            Dimensiones: 12X20X30 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTURAL10X20X30-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800; font-size: 115%">
                                            LADRILLO ESTRUCTURAL VERTICAL
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 10X20X30 <br />
                                            Rendimiento: 12,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTURAL12X20X30-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">
                                            LADRILLO ESTRUCTURAL VERTICAL
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 12X20X30 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTURAL12X21X29-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">
                                            LADRILLO ESTRUCTURAL VERTICAL
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 12X20X30 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTURAL11,5X23X33-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">
                                            LADRILLO ESTRUCTURAL VERTICAL
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 12X21X29 <br />
                                            Rendimiento: 15,5 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTURAL10X12X30-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800; font-size: 100%">
                                            LADRILLO ESTRUCTURAL ESQUINERO
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 10X12X30 <br />
                                            Rendimiento: 29 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/ESTRUCTURAL11,5X11,5X33-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800; font-size: 100%">
                                            LADRILLO ESTRUCTURAL ESQUINERO
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 11,5X11,5X33 <br />
                                            Rendimiento: 29 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/CATALAN10X12X30-PhotoRoom.png" alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800; font-size: 80%">
                                            LADRILLO CATALÁN
                                        </h5>
                                        <p class="fs-6">
                                            Dimensiones: 10X12X30 <br />
                                            Rendimiento: 29 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/adoquin-removebg-preview.png" alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO ADOQUÍN</h5>
                                        <p class="fs-6">
                                            Dimensiones: 5X10X20 <br />
                                            Rendimiento: 29 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a data-bs-toggle="modal" data-bs-target="#catalogo"><img class="img"
                                            src="./assets/img/IMGPRODUCTOS/BLOQUEVIGA12X21X29-PhotoRoom.png"
                                            alt="" /></a>
                                    <div class="down-content">
                                        <h5 style="color: #ff6800">LADRILLO BLOQUE VIGA</h5>
                                        <p class="fs-6">
                                            Dimensiones: 11,5X23X33 <br />
                                            Rendimiento: 29 Und/m2
                                        </p>
                                        <a href="https://wa.link/4auhy4"><img width="15%;"
                                                src="./assets/img/watrans.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Items-->
    <div class="modal fade" id="catalogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fs-6">
                        Para más información sobre nuestros productos, descarga nuestro
                        catálogo en PDF o envía un mensaje a nuestro Whatsapp.
                    </p>
                    <video id="medio" width="700" height="350" controls>
                        <source src="./assets/mp4/catalogo.mp4" />
                        Tu navegador no soporta vídeo
                    </video>
                </div>
                <div>
                    <a href="./assets/pdf/catalogoBellavista.pdf" type="button" style="
                background-color: #ff5733;
                color: #ffffff;
                margin-bottom: 2%;
              " class="btn btn-sm ms-1">Descargar PDF</a>
                    <a href="https://wa.link/u4knsp" type="button" style="
                background-color: #ff5733;
                color: #ffffff;
                margin-bottom: 2%;
              " class="btn btn-sm ms-1"><span class="bi bi-whatsapp"></span> 3207971318</a>
                    <a href="https://wa.link/4auhy4" type="button" style="
                background-color: #ff5733;
                color: #ffffff;
                margin-bottom: 2%;
              " class="btn btn-sm ms-1"><span class="bi bi-whatsapp"></span> 3207971327</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/owl.js"></script>
    <script src="./assets/js/slick.js"></script>
    <script src="./assets/js/isotope.js"></script>
    <script src="./assets/js/accordions.js"></script>

    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
            // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ""; // with more chance of typos
            t.style.color = "#fff";
        }
    }
    </script>
    <footer class="w3l-footer9">
        <section class="footer-inner-main py-5">
            <div class="container py-md-3">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-4 sub-one-left pe-lg-5">
                            <h6>Sobre nosotros</h6>
                            <p class="footer-phny pe-lg-3">
                                Nos esforzamos día a día por ofrecerle lo mejor de nuestra
                                compañía a nuestros socios y clientes para construír un mañana
                                más sólido con productos de la mejor calidad.
                            </p>
                            <div class="columns-2 mt-lg-5 mt-4">
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/ladrillera.bellavista.58/"><span class=""><i
                                                    class="bi bi-facebook"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="https://co.linkedin.com/company/inversiones-bellavista-ladrillera"><span
                                                class=""><i class="bi bi-linkedin"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/ladrillerabellavista12/"><span class=""><i
                                                    class="bi bi-instagram"></i></span></a>
                                    </li>
                                    <!--<li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Enlaces útiles</h6>
                            <ul>
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="./sobre.php">Sobre nosotros</a></li>

                                <li><a href="./productos.php">Productos</a></li>

                                <!--<li><a href="#blog">Blog</a>
                                </li>-->
                                <li><a href="./contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Compañía</h6>
                            <ul>
                                <li>
                                    <a href="https://wa.link/d2z9jv">¡Trabaja con nosotros! </a>
                                </li>
                                <li><a href="tel:+57 3174422424">3174422424 </a></li>
                                <li><a href="#">talentoh@ladrillerabellavista.com </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 align-items-center ms-auto">
                            <img src="./assets/img/LogotipoLadrillera.png" alt="" width="50%" style="margin: 20%" />
                        </div>
                    </div>
                </div>
                <div class="below-section mt-5">
                    <div class="copyright-footer">
                        <div class="columns text-left">
                            <p>
                                © 2024 Inversiones Bellavista S.A.S. Todos los derechos
                                reservados <br />Desarrollado por
                                <a href="#" target="_blank">Camila lozano</a>
                                y
                                <a href="#" target="_blank">Juan Jose Rincon</a>
                            </p>
                        </div>
                        <ul class="footer-w3list text-right">
                            <li><a href="#url">Política de privacidad</a></li>
                            <li><a href="#url">Términos &amp; Condiciones</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script src="./assets/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="" aria-hidden="true"><i class="bi bi-arrow-90deg-up"></i></span>
        </button>
        <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        <!-- //move top -->
    </footer>

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/theme-change.js"></script>

    <script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
    </script>

    <script>
    $(function() {
        $(".navbar-toggler").click(function() {
            $("body").toggleClass("noscroll");
        });
    });
    </script>

    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="./assets/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/mostrarAnimaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
</body>

</html>