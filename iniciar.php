<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="./assets/img/LogotipoLadrillera.png" />
    <title>Inversiones Bellavista</title>
    <!--/google-fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap"
        rel="stylesheet" />
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="./assets/css/style-starter.css" />

    <!--//Template-CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <?php
    if (isset($_SESSION['error'])) {
    ?>
    <script>
    let msj = '<?php echo $_SESSION['error'] ?>'
    Swal.fire(
        "Error al Ingresar",
        msj,
        'error'
    )
    </script>
    <?php
        unset($_SESSION['error']);
    }
    ?>
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
            <div class="container text-center">
                <div class="card" style="width: 40%; margin:auto">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="mb-4" src="./assets/img/logoBellavista.jpg" alt="Logo" width="200" height="200">
                            <h2 class="card-title">Iniciar Sesión</h2>
                        </div>

                        <form class="login-form" method="post" action=" ./controller/login.php">
                            <div class="form-group">
                                <label for="cedula">Cédula:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="number" min="1" max="9999999999" id="cedula" name="cedula"
                                        class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" id="pass" name="pass" class="form-control" required>
                                    <span class="input-group-text toggle-password" onclick="togglePassword()"><i
                                            class="bi bi-eye"></i></span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>


    <!--//features section -->
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
    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("contrasena");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    </script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>