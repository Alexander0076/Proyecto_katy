<?php include 'conexion/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once 'templates/head.php'
    ?>
    <?php
    require_once 'templates/script.php';
    ?>
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>

                    <li>
                        <a href="recipe.html">Afiliate</a>
                    </li>
                    <li>
                        <a href="blog.html">Unete a nosotros</a>
                    </li>
                    <li>
                        <a href="contact.html">Registrate</a>
                    </li>
                    <li>
                        <a href="about.html">Pagos</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>
                                        <li class="dinone">Nuestro Contacto : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">+503 7070-7070</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">Restar503@gmail.com</a></li>

                                        <li class="button_user"><a class="button" href="registro.php">Registrarse</a></li>

                                        <!--registrar e ingresar-->

                                        <li class="button_user"><a class="button" href="login.php">Inicar sesión</a></li>
                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="images/menu_icon.png" alt="#">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <!-- start slider section -->
            <div class="slider_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="slider_cont">
                                                        <h3>Descubre Nuevos Restaurantes,<br>"Res-Star" La Herramienta</h3>
                                                        <p>Que te permitira encontrar los mejores restaurantes entre una amplia delección de establecimientos de alta calidad.</p>

                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="slider_image full text_align_center">
                                                        <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider section -->

            <!-- section -->

            <div class="bg_bg">
                <!-- about -->
                <div class="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <i><img src="images/title.png" alt="#" /></i>
                                    <h2>Comida y Restaurantes</h2>
                                    <span>Nuestro objetivo es crear una mejor experiencia cliente en los lugares que este desee visitar y darle una aplicación de confianza donde puedan opinar de forma libre sobre el sabor, limpieza, atención y precios sin importar sean negativos o positivos.
                                        <br>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="about_box">
                                    <h3>Re-Star</h3>
                                    <p>Esta comprometida a trabajar e innovar de la mejor manera y con la mayor rapidez para dar lo mejor a nuestros fieles clientes, la realización de esta página web es con el objetivo de poder tener una manera de inscripción más rápida y que los encargados de restaurantes no deban acercase hasta nuestras oficinas, sino que sea un tramite rápido y sin la necesidad de salir de su lugar de trabajo o casa. </p>

                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                                <div class="about_img">
                                    <figure><img src="images/about-img.jpg" alt="#/"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end about -->

                <!-- blog -->
                <div class="blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <i><img src="images/title.png" alt="#" /></i>
                                    <h2>Nuestra razón de ser</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                                <div class="blog_box">
                                    <div class="blog_img_box">
                                        <figure><img src="images/blog_img1.png" alt="#" />

                                        </figure>
                                    </div>
                                    <h3>Nosotros...</h3>
                                    <p>En Re-Star, buscamos la forma de siempre innovar y poder más al alcance de nuestros clientes, dándoles un servicio de calidad y rapidez. Incorporarnos a las diferentes plataformas es una forma de llegar a más clientes ya que a pesar de ser un emprendimiento pequeño muchos de los restaurantes inscritos prefieren pagar su suscripción de manera virtual y así no visitar nuestras oficinas.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                                <div class="blog_box">
                                    <div class="blog_img_box">
                                        <figure><img src="images/blog_img2.png" alt="#" />

                                        </figure>
                                    </div>
                                    <h3>Lo que queresmos es...</h3>
                                    <p>Evaluar los gustos, opiniones y criterios de la persona salvadoreña para guiar nuestro emprendimiento y satisfacer sus necesidades con éxito, además, aclarar nuestra visión sobre cómo comunicaremos y expandiremos el emprendimiento a nivel socioeconómico</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="blog_box">
                                    <div class="blog_img_box">
                                        <figure><img src="images/blog_img3.png" alt="#" />

                                        </figure>
                                    </div>
                                    <h3>Debido a...</h3>
                                    <p>La situación actual a cambiado, es imposible no ver algunos años atrás y darnos cuenta de los muchos avances que hemos tenido en poco tiempo. Por eso queremos evaluar las mejores opciones de restaurantes para los diferentes tipos de clientes basándonos en sus gustos, presupuestos o lugares ya visitados y crear una experiencia cliente/restaurante único, donde los consumidores se sientan satisfechos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end blog -->

                <!-- Our Client -->

            </div>
            <!-- footer -->
            <fooetr>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="images/logo1.jpg" alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="lik">
                                    <li class="active"> <a href="index.html">Home</a></li>

                                    <li> <a href="recipe.html">Afiliate</a></li>
                                    <li> <a href="blog.html">Unete a nosotros</a></li>
                                    <li> <a href="contact.html">Registrate</a></li>
                                    <li> <a href="about.html">Pagos</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="new">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p>© 2021 All Rights Reserved.</a></p>
                        </div>
                    </div>
                </div>
            </fooetr>
            <!-- end footer -->

        </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        })
    </script>

</body>

</html>