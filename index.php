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
                            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sobre.php">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contacto.php">Contáctanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cotizador.php">Cotizar</a>
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
    <section class="w3l-main-slider" id="home">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero" style="margin-top: 15%">
                            <h3 class="title-hero-19">Visión al mañana</h3>
                            <h3 class="title-hero-19"></h3>
                            <p class="mt-4" style="font-size: 150%">
                                Ser partícipes en la construcción de sueños de las familias
                                colombianas y la de nuestros colaboradores
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-passion-sec2 py-5">
        <div class="container py-md-5 py-3">
            <div class="container">
                <div class="row w3l-passion-mid-grids">
                    <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                        <div class="title-content-two">
                            <h6 class="title-subw3hny mb-1 text-left">Nosotros</h6>
                            <h3 class="title-w3l mb-4">
                                Estamos siempre en la búsqueda de un mejoramiento continuo en
                                nuestros productos y procesos.
                            </h3>
                        </div>
                        <p class="mt-3 pe-lg-5">
                            Inversiones Bellavista S.A.S inicia sus actividades en el año
                            1995. En el año 1995 la empresa crece con el ingreso de un grupo
                            de inversionistas antioqueños, quienes comprometidos con el
                            ánimo de hacer negocio invierten en la empresa, mejorando su
                            sistema productivo, lo cual acelera aún más el proceso de
                            producción que es el siguiente.
                        </p>
                        <div class="w3banner-content-btns">
                            <a href="./sobre.php" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Leer más</a>
                            <a href="./contacto.php" class="btn btn-style btn-outline-dark mt-lg-5 mt-4">Contáctanos</a>
                        </div>
                    </div>
                    <div class="col-lg-6 w3hny-passion-item">
                        <img src="./assets/img/imagesIndex/chicoProduccion.jpg" alt="" class="img-fluid radius-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-features py-5 pt-0" id="features">
        <div class="container py-lg-5 py-md-4 py-2 pt-0">
            <div class="main-cont-wthree-2 align-items-center text-left">
                <div class="row align-items-center-start">
                    <div class="col-lg-3 col-md-6">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="bi bi-bricks"></i>
                            </div>
                            <h4>
                                <a href="#service" class="title-head mb-3">Nuestra ruta</a>
                            </h4>
                            <p class="text-para">
                                Inspirados en la construcción de un mañana más sólido y de la
                                mano con nuestras políticas, valores y principios edificamos
                                sueños a través del diseño, fabricación y comercialización de
                                productos de arcilla, trabajando por la calidad y satisfacción
                                de nuestros clientes.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="bi bi-wrench-adjustable"></i>
                            </div>
                            <h4>
                                <a href="#service" class="title-head mb-3">Excelente calidad</a>
                            </h4>
                            <p class="text-para">
                                Realizamos análisis periódicos en laboratorios especializados,
                                con el propósito de garantizar un producto de mayor
                                resistencia mecánica y menos absorción, lo cual nos permite la
                                entrega de un producto bien terminado y de excelente calidad.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h4>
                                <a href="#service" class="title-head mb-3">Visión al mañana</a>
                            </h4>
                            <p class="text-para">
                                Buscamos a través del desarrollo de nuevos productos, ser
                                partícipes en la construcción de sueños de las familias
                                colombianas y la de nuestros colaboradores con calidad,
                                eficiencia y productividad.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4>
                                <a href="#service" class="title-head mb-3">Comprometidos con nuestros colaboradores</a>
                            </h4>
                            <p class="text-para">
                                Nosotros como INVERSIONES BELLAVISTA S.A.S. estamos
                                comprometidos a mantener y mejorar el bienestar de todos
                                nuestros colaboradores.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features section -->

    <!-- /home-page-video-popup-->
    <section class="w3l-index5 py-5" id="video1">
        <div class="container py-3 pb-5">
            <div class="w3-videoinf pb-5 mb-3">
                <div class="row new-block py-md-4">
                    <div class="col-lg-6 video-info">
                        <div class="title-content">
                            <h6 class="title-subw3hny">Vídeo</h6>
                            <h3 class="title-w3l two mb-3">
                                Proceso de fabricación de nuestros productos.
                            </h3>
                            <p>
                                Estamos siempre en la búsqueda de un mejoramiento continuo en
                                nuestros productos y procesos actualmente contamos con
                                capacidad de producción de 6.000 toneladas al mes aprox.
                            </p>
                            <div class="">
                                <a href="./sobre.php"
                                    class="btn btn-style transparant-btn btn-primary mt-lg-5 mt-4 me-2">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 history-info align-self">
                        <div class="position-relative py-5 pt-lg-0">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/hZkY4ygBMn4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-gallery" id="gallery">
        <div class="destionation-innf py-5">
            <div class="container py-lg-5 py-md-4 py-2 HomePageGallery align-items-center-start">
                <div class="title-content text-center">
                    <h6 class="title-subw3hny text-center">Galería</h6>
                    <h3 class="title-w3l mb-5 text-center">Proyectos</h3>
                </div>

                <div id="myModal" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body"></div>
                        </div>
                    </div>
                </div>

                <ul class="gallery_agile">
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <img src="./assets/images/sproyect.jpeg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos"></div>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <img src="./assets/images/obraMarval.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos"></div>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <img src="./assets/images/proyectCasas4.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos"></div>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <img src="./assets/images/proyectCasas.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos"></div>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <img src="./assets/images/proyectC.jpeg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos"></div>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid mt-4">
                            <img src="./assets/images/obraMarval.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos"></div>
                        </div>
                    </li>
                </ul>

                <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
                <script>
                lazyload();
                </script>
            </div>
        </div>
    </section>

    <section class="w3l-gallery" id="gallery">
        <div class="destionation-innf py-5">
            <div class="container py-lg-5 py-md-4 py-2 HomePageGallery align-items-center-start">
                <div class="title-content text-center">
                    <h6 class="title-subw3hny text-center">Ultimas</h6>
                    <h3 class="title-w3l mb-5 text-center">Publicaciones</h3>
                </div>

                <div id="myModal" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body"></div>
                        </div>
                    </div>
                </div>

                <ul class="gallery_agile">
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/p/C1-DUqYNUe6/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14" style="
                    background: #fff;
                    border: 0;
                    border-radius: 3px;
                    box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),
                      0 1px 10px 0 rgba(0, 0, 0, 0.15);
                    margin: 1px;
                    max-width: 540px;
                    min-width: 326px;
                    padding: 0;
                    width: 99.375%;
                    width: -webkit-calc(100% - 2px);
                    width: calc(100% - 2px);
                  ">
                                <div style="padding: 16px">
                                    <a href="https://www.instagram.com/p/C1-DUqYNUe6/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style="
                        background: #ffffff;
                        line-height: 0;
                        padding: 0 0;
                        text-align: center;
                        text-decoration: none;
                        width: 100%;
                      " target="_blank">
                                        <div style="
                          display: flex;
                          flex-direction: row;
                          align-items: center;
                        ">
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 50%;
                            flex-grow: 0;
                            height: 40px;
                            margin-right: 14px;
                            width: 40px;
                          "></div>
                                            <div style="
                            display: flex;
                            flex-direction: column;
                            flex-grow: 1;
                            justify-content: center;
                          ">
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 4px;
                              flex-grow: 0;
                              height: 14px;
                              margin-bottom: 6px;
                              width: 100px;
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 4px;
                              flex-grow: 0;
                              height: 14px;
                              width: 60px;
                            "></div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0"></div>
                                        <div style="
                          display: block;
                          height: 50px;
                          margin: 0 auto 12px;
                          width: 50px;
                        ">
                                            <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div style="padding-top: 8px">
                                            <div style="
                            color: #3897f0;
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 550;
                            line-height: 18px;
                          ">
                                                Ver esta publicación en Instagram
                                            </div>
                                        </div>
                                        <div style="padding: 12.5% 0"></div>
                                        <div style="
                          display: flex;
                          flex-direction: row;
                          margin-bottom: 14px;
                          align-items: center;
                        ">
                                            <div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              height: 12.5px;
                              width: 12.5px;
                              transform: translateX(0px) translateY(7px);
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              height: 12.5px;
                              transform: rotate(-45deg) translateX(3px)
                                translateY(1px);
                              width: 12.5px;
                              flex-grow: 0;
                              margin-right: 14px;
                              margin-left: 2px;
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              height: 12.5px;
                              width: 12.5px;
                              transform: translateX(9px) translateY(-18px);
                            "></div>
                                            </div>
                                            <div style="margin-left: 8px">
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              flex-grow: 0;
                              height: 20px;
                              width: 20px;
                            "></div>
                                                <div style="
                              width: 0;
                              height: 0;
                              border-top: 2px solid transparent;
                              border-left: 6px solid #f4f4f4;
                              border-bottom: 2px solid transparent;
                              transform: translateX(16px) translateY(-4px)
                                rotate(30deg);
                            "></div>
                                            </div>
                                            <div style="margin-left: auto">
                                                <div style="
                              width: 0px;
                              border-top: 8px solid #f4f4f4;
                              border-right: 8px solid transparent;
                              transform: translateY(16px);
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              flex-grow: 0;
                              height: 12px;
                              width: 16px;
                              transform: translateY(-4px);
                            "></div>
                                                <div style="
                              width: 0;
                              height: 0;
                              border-top: 8px solid #f4f4f4;
                              border-left: 8px solid transparent;
                              transform: translateY(-4px) translateX(8px);
                            "></div>
                                            </div>
                                        </div>
                                        <div style="
                          display: flex;
                          flex-direction: column;
                          flex-grow: 1;
                          justify-content: center;
                          margin-bottom: 24px;
                        ">
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 4px;
                            flex-grow: 0;
                            height: 14px;
                            margin-bottom: 6px;
                            width: 224px;
                          "></div>
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 4px;
                            flex-grow: 0;
                            height: 14px;
                            width: 144px;
                          "></div>
                                        </div>
                                    </a>
                                    <p style="
                        color: #c9c8cd;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        line-height: 17px;
                        margin-bottom: 0;
                        margin-top: 8px;
                        overflow: hidden;
                        padding: 8px 0 7px;
                        text-align: center;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                      ">
                                        <a href="https://www.instagram.com/p/C1-DUqYNUe6/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style="
                          color: #c9c8cd;
                          font-family: Arial, sans-serif;
                          font-size: 14px;
                          font-style: normal;
                          font-weight: normal;
                          line-height: 17px;
                          text-decoration: none;
                        " target="_blank">Una publicación compartida por INVERSIONES BELLAVISTA
                                            SAS (@ladrillerabellavista12)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/p/C2-mtBPrwJS/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14" style="
                    background: #fff;
                    border: 0;
                    border-radius: 3px;
                    box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),
                      0 1px 10px 0 rgba(0, 0, 0, 0.15);
                    margin: 1px;
                    max-width: 540px;
                    min-width: 326px;
                    padding: 0;
                    width: 99.375%;
                    width: -webkit-calc(100% - 2px);
                    width: calc(100% - 2px);
                  ">
                                <div style="padding: 16px">
                                    <a href="https://www.instagram.com/p/C2-mtBPrwJS/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style="
                        background: #ffffff;
                        line-height: 0;
                        padding: 0 0;
                        text-align: center;
                        text-decoration: none;
                        width: 100%;
                      " target="_blank">
                                        <div style="
                          display: flex;
                          flex-direction: row;
                          align-items: center;
                        ">
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 50%;
                            flex-grow: 0;
                            height: 40px;
                            margin-right: 14px;
                            width: 40px;
                          "></div>
                                            <div style="
                            display: flex;
                            flex-direction: column;
                            flex-grow: 1;
                            justify-content: center;
                          ">
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 4px;
                              flex-grow: 0;
                              height: 14px;
                              margin-bottom: 6px;
                              width: 100px;
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 4px;
                              flex-grow: 0;
                              height: 14px;
                              width: 60px;
                            "></div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0"></div>
                                        <div style="
                          display: block;
                          height: 50px;
                          margin: 0 auto 12px;
                          width: 50px;
                        ">
                                            <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div style="padding-top: 8px">
                                            <div style="
                            color: #3897f0;
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 550;
                            line-height: 18px;
                          ">
                                                Ver esta publicación en Instagram
                                            </div>
                                        </div>
                                        <div style="padding: 12.5% 0"></div>
                                        <div style="
                          display: flex;
                          flex-direction: row;
                          margin-bottom: 14px;
                          align-items: center;
                        ">
                                            <div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              height: 12.5px;
                              width: 12.5px;
                              transform: translateX(0px) translateY(7px);
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              height: 12.5px;
                              transform: rotate(-45deg) translateX(3px)
                                translateY(1px);
                              width: 12.5px;
                              flex-grow: 0;
                              margin-right: 14px;
                              margin-left: 2px;
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              height: 12.5px;
                              width: 12.5px;
                              transform: translateX(9px) translateY(-18px);
                            "></div>
                                            </div>
                                            <div style="margin-left: 8px">
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              flex-grow: 0;
                              height: 20px;
                              width: 20px;
                            "></div>
                                                <div style="
                              width: 0;
                              height: 0;
                              border-top: 2px solid transparent;
                              border-left: 6px solid #f4f4f4;
                              border-bottom: 2px solid transparent;
                              transform: translateX(16px) translateY(-4px)
                                rotate(30deg);
                            "></div>
                                            </div>
                                            <div style="margin-left: auto">
                                                <div style="
                              width: 0px;
                              border-top: 8px solid #f4f4f4;
                              border-right: 8px solid transparent;
                              transform: translateY(16px);
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              flex-grow: 0;
                              height: 12px;
                              width: 16px;
                              transform: translateY(-4px);
                            "></div>
                                                <div style="
                              width: 0;
                              height: 0;
                              border-top: 8px solid #f4f4f4;
                              border-left: 8px solid transparent;
                              transform: translateY(-4px) translateX(8px);
                            "></div>
                                            </div>
                                        </div>
                                        <div style="
                          display: flex;
                          flex-direction: column;
                          flex-grow: 1;
                          justify-content: center;
                          margin-bottom: 24px;
                        ">
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 4px;
                            flex-grow: 0;
                            height: 14px;
                            margin-bottom: 6px;
                            width: 224px;
                          "></div>
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 4px;
                            flex-grow: 0;
                            height: 14px;
                            width: 144px;
                          "></div>
                                        </div>
                                    </a>
                                    <p style="
                        color: #c9c8cd;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        line-height: 17px;
                        margin-bottom: 0;
                        margin-top: 8px;
                        overflow: hidden;
                        padding: 8px 0 7px;
                        text-align: center;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                      ">
                                        <a href="https://www.instagram.com/p/C2-mtBPrwJS/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style="
                          color: #c9c8cd;
                          font-family: Arial, sans-serif;
                          font-size: 14px;
                          font-style: normal;
                          font-weight: normal;
                          line-height: 17px;
                          text-decoration: none;
                        " target="_blank">Una publicación compartida por INVERSIONES BELLAVISTA
                                            SAS (@ladrillerabellavista12)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                        </div>
                    </li>
                    <li>
                        <div class="w3_agile_portfolio_grid">
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/p/C3S4VFBtWUF/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14" style="
                    background: #fff;
                    border: 0;
                    border-radius: 3px;
                    box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),
                      0 1px 10px 0 rgba(0, 0, 0, 0.15);
                    margin: 1px;
                    max-width: 540px;
                    min-width: 326px;
                    padding: 0;
                    width: 99.375%;
                    width: -webkit-calc(100% - 2px);
                    width: calc(100% - 2px);
                  ">
                                <div style="padding: 16px">
                                    <a href="https://www.instagram.com/p/C3S4VFBtWUF/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style="
                        background: #ffffff;
                        line-height: 0;
                        padding: 0 0;
                        text-align: center;
                        text-decoration: none;
                        width: 100%;
                      " target="_blank">
                                        <div style="
                          display: flex;
                          flex-direction: row;
                          align-items: center;
                        ">
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 50%;
                            flex-grow: 0;
                            height: 40px;
                            margin-right: 14px;
                            width: 40px;
                          "></div>
                                            <div style="
                            display: flex;
                            flex-direction: column;
                            flex-grow: 1;
                            justify-content: center;
                          ">
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 4px;
                              flex-grow: 0;
                              height: 14px;
                              margin-bottom: 6px;
                              width: 100px;
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 4px;
                              flex-grow: 0;
                              height: 14px;
                              width: 60px;
                            "></div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0"></div>
                                        <div style="
                          display: block;
                          height: 50px;
                          margin: 0 auto 12px;
                          width: 50px;
                        ">
                                            <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div style="padding-top: 8px">
                                            <div style="
                            color: #3897f0;
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            font-style: normal;
                            font-weight: 550;
                            line-height: 18px;
                          ">
                                                Ver esta publicación en Instagram
                                            </div>
                                        </div>
                                        <div style="padding: 12.5% 0"></div>
                                        <div style="
                          display: flex;
                          flex-direction: row;
                          margin-bottom: 14px;
                          align-items: center;
                        ">
                                            <div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              height: 12.5px;
                              width: 12.5px;
                              transform: translateX(0px) translateY(7px);
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              height: 12.5px;
                              transform: rotate(-45deg) translateX(3px)
                                translateY(1px);
                              width: 12.5px;
                              flex-grow: 0;
                              margin-right: 14px;
                              margin-left: 2px;
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              height: 12.5px;
                              width: 12.5px;
                              transform: translateX(9px) translateY(-18px);
                            "></div>
                                            </div>
                                            <div style="margin-left: 8px">
                                                <div style="
                              background-color: #f4f4f4;
                              border-radius: 50%;
                              flex-grow: 0;
                              height: 20px;
                              width: 20px;
                            "></div>
                                                <div style="
                              width: 0;
                              height: 0;
                              border-top: 2px solid transparent;
                              border-left: 6px solid #f4f4f4;
                              border-bottom: 2px solid transparent;
                              transform: translateX(16px) translateY(-4px)
                                rotate(30deg);
                            "></div>
                                            </div>
                                            <div style="margin-left: auto">
                                                <div style="
                              width: 0px;
                              border-top: 8px solid #f4f4f4;
                              border-right: 8px solid transparent;
                              transform: translateY(16px);
                            "></div>
                                                <div style="
                              background-color: #f4f4f4;
                              flex-grow: 0;
                              height: 12px;
                              width: 16px;
                              transform: translateY(-4px);
                            "></div>
                                                <div style="
                              width: 0;
                              height: 0;
                              border-top: 8px solid #f4f4f4;
                              border-left: 8px solid transparent;
                              transform: translateY(-4px) translateX(8px);
                            "></div>
                                            </div>
                                        </div>
                                        <div style="
                          display: flex;
                          flex-direction: column;
                          flex-grow: 1;
                          justify-content: center;
                          margin-bottom: 24px;
                        ">
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 4px;
                            flex-grow: 0;
                            height: 14px;
                            margin-bottom: 6px;
                            width: 224px;
                          "></div>
                                            <div style="
                            background-color: #f4f4f4;
                            border-radius: 4px;
                            flex-grow: 0;
                            height: 14px;
                            width: 144px;
                          "></div>
                                        </div>
                                    </a>
                                    <p style="
                        color: #c9c8cd;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        line-height: 17px;
                        margin-bottom: 0;
                        margin-top: 8px;
                        overflow: hidden;
                        padding: 8px 0 7px;
                        text-align: center;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                      ">
                                        <a href="https://www.instagram.com/p/C3S4VFBtWUF/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style="
                          color: #c9c8cd;
                          font-family: Arial, sans-serif;
                          font-size: 14px;
                          font-style: normal;
                          font-weight: normal;
                          line-height: 17px;
                          text-decoration: none;
                        " target="_blank">Una publicación compartida por INVERSIONES BELLAVISTA
                                            SAS (@ladrillerabellavista12)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                        </div>
                    </li>
                </ul>

                <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
                <script>
                lazyload();
                </script>
            </div>
        </div>
    </section>

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