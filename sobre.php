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
                            <a class="nav-link" aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item active">
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
    <div class="inner-banner py-5 pb-sm-0" style="background-image: url(./assets/img/imagesIndex/produccion1.jpg)">
        <section class="w3l-breadcrumb text-left py-sm-5 pb-0">
            <div class="container" style="margin-top: 8%">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="./index.php">Inicio</a></li>
                            <li class="active">
                                <span class="mx-2"><i class="bi bi-chevron-double-right"></i></span>Sobre nosotros
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="w3l-content-6 py-5">
        <div class="container py-md-5 HomePageServices">
            <div class="content-info-in row">
                <div class="content-gd col-lg-6 text-left pe-lg-5">
                    <h6 class="title-subw3hny mb-1 text-left">Nuestro orígen</h6>
                    <h3 class="title-w3l">Quiénes somos</h3>
                    <h5 class="w3sub-text my-3">
                        Inversiones Bellavista S.A.S inicia sus actividades en el año
                        1995.
                    </h5>
                    <p>
                        En el año 1995 la empresa crece con el ingreso de un grupo de
                        inversionistas antioqueños, quienes comprometidos con el ánimo de
                        emprender invierten en la empresa, mejorando su sistema
                        productivo, lo cual acelera aún más el proceso de producción.
                    </p>
                    <p class="mt-3">
                        Actualmente cuenta con una extensión a 66.460 m2 aprox. A partir
                        de este momento comenzamos a realizar análisis periódicos en
                        laboratorios especializados, con el propósito de garantizar un
                        producto de mayor resistencia mecánica y menos absorción, lo cual
                        nos permite la entrega de un producto bien terminado y de
                        excelente calidad. En la actualidad contamos con una capacidad de
                        producción de 6.000 toneladas al mes aprox.
                    </p>
                </div>
                <div class="content-gd col-lg-6 mt-lg-0 mt-5">
                    <img src="./assets/img/imagesIndex/ab.jpg" alt="" class="img-fluid radius-image" />
                </div>
            </div>
        </div>
    </section>
    <!--//content-6-main-->

    <!--/w3l-subscribe-->
    <section class="w3l-subscribe-content w3l-passion-mid-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 subscribe-content-right two p-0">
                    <img class="img-fluid radius-image" style="filter: brightness(1.75)"
                        src="./assets/img/imagesIndex/pasilloRamada.jpg" alt="" />
                </div>
                <div class="col-lg-6 subscribe-content-left p-5">
                    <div class="subscribe p-5">
                        <div class="title-content-two text-left">
                            <h6 class="title-subw3hny mb-1 text-left">Lo que ofrecemos</h6>
                            <h3 class="title-w3l mb-3">
                                Brindamos productos de la más alta calidad
                            </h3>
                        </div>
                        <p>
                            En nuestra empresa podrás contar con una amplia variedad de
                            referencias, su creatividad es acogida, escuchamos sus
                            inquietudes para que diseñemos en conjunto.
                        </p>
                        <div class="subscribe-cat">
                            <div class="subscribe-cat-gd">
                                <a href="./productos.php" class="subscribe-cat-link">Faroles</a>
                                <p class="">Ladrillo liso y rayado de la mejor calidad.</p>
                            </div>
                            <div class="subscribe-cat-gd">
                                <a href="./productos.php" class="subscribe-cat-link">Caravistas</a>
                                <p class="">Ladrillo caravista de diferentes referencias.</p>
                            </div>
                            <div class="subscribe-cat-gd">
                                <a href="./productos.php" class="subscribe-cat-link">Estructurales</a>
                                <p class="">
                                    Ladrillo estructural con la mejor calidad y precio del
                                    mercado.
                                </p>
                            </div>
                            <div class="subscribe-cat-gd">
                                <a href="./productos.php" class="subscribe-cat-link">Otros productos</a>
                                <p class="">
                                    Encuentra variedad de productos en nuestra empresa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-subscribe-->

    <!--/tabs-faqs-->
    <!-- faq section -->
    <div class="w3l-faq-block py-5" id="faq">
        <div class="container content-gd py-lg-5">
            <div class="faqw3content text-left">
                <h6 class="title-subw3hny mb-1 text-left">Para nuestros clientes</h6>
                <h3 class="title-w3l mb-4">Preguntas más frecuentes</h3>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. ¿Cuál es nuestro orígen?
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En el año 1995 se da orígen a nuestra empresa con el ingreso
                                    de un grupo de inversionistas antioqueños quienes se vieron
                                    atraídos a inversiones Bellavista S.A.S por nuestra
                                    propuesta fresca y emprendedora de crear no sólo una empresa
                                    más, sino un producto que cumpliera con satisfacer un
                                    mercado bastante exigente y a su vez creáramos una
                                    oportunidad de mejorar la calidad de vida de cientos de
                                    familias por medio de un trabajo digno y estable, poco a
                                    poco mejoramos nuestro sistema productivo, lo cual aceleró
                                    aún más nuestro proceso de producción y nos hizo la empresa
                                    que somos hoy, una empresa que se empeña día a día en
                                    construir un mañana más sólido.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFourth">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFourth" aria-expanded="false"
                                    aria-controls="collapseFourth">
                                    02. Nuestra misión
                                </button>
                            </h4>
                            <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Inspirados en la construcción de un mañana más sólido y de
                                    la mano con nuestras políticas, valores y principios
                                    edificamos sueños a través del diseño, fabricación y
                                    comercialización de productos de arcilla, trabajando por la
                                    calidad y satisfacción de nuestros clientes. Estamos siempre
                                    en la búsqueda de un mejoramiento continuo en nuestros
                                    productos y procesos, garantizando un desarrollo permanente
                                    de los trabajadores, comprometidos con su seguridad, salud y
                                    el medio ambiente.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFifth">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseThree">
                                    03. Nuestra visión
                                </button>
                            </h4>
                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Crecimiento de nuestra marca, a través del desarrollo de
                                    nuevos productos. Ser participes en la construcción de
                                    sueños de las familias colombianas y la de nuestros
                                    empleados. Calidad, eficiencia y productividad garantizarán
                                    una rentabilidad sostenible en el tiempo Ser reconocida por
                                    el servicio viviendo en constante crecimiento y en armonía
                                    con el medio ambiente.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingSixth">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                    06. Valores que nos caracterizan
                                </button>
                            </h4>
                            <div id="collapseSixth" class="accordion-collapse collapse" aria-labelledby="headingSixth"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Integridad: Actuamos con transparencia, diligencia,
                                        excelencia, justicia y honestidad, generando confianza,
                                        credibilidad y lealtad.
                                    </p>
                                    <p>
                                        Compromiso: Somos responsables en los compromisos
                                        adquiridos con el entorno, la sociedad y el medio
                                        ambiente.
                                    </p>
                                    <p>
                                        Legitimidad: Actuamos dentro de un marco ético y legal.
                                    </p>
                                    <p>
                                        Honestidad: Orienta todos nuestros actos y decisiones.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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