<?php
session_start();
require_once 'conexion/conexion.php';
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        require_once 'templates/head.php'
        ?>

    </head>

    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
        <header class="">
            <?php
            require_once 'templates/header.php'
            ?>
        </header>

        <!-- Page Content -->
        <div class="page-heading index-heading header-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h1 style="color: white; font-size: 90px; text-transform: uppercase; font-weight: 900;margin-bottom: 15px">Bienvenido
                        </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Ends Here -->

        <div class="latest-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Productos</h2>
                            <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="best-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Unete a la familia de Re-Star</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left-content">
                            <h4>Aplica</h4>
                            <p>Si quieres ser parte de equipo de Re-Star, y tienes las aptitudes para poder buscar nuevos restaurantes que nececiten ayuda para impulsarse en mundo culinario y/o eres un experto brindando reseñas, ¡Que esperas!

                                <a href="aplica.php" class="filled-button">Aplicar</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="assets/images/feature-image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $database = new Database();
        $db = $database->connect();
        $result2 = $db->prepare("SELECT * FROM afiliados");
        $result2->execute();
        
        ?>

        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>¡Afilia tu restaurante con nosotros!</h4>
                                    <h4>Contamos con <em><?php echo $result2->rowCount()?></em> afiliados</h4>
                                </div>
                                <div class="col-md-4">
                                    <a href="afiliate.php" class="filled-button">Afiliarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php
        require_once 'templates/footer.php';
        ?>

    </body>

    </html>


<?php
} else {
    header("location:index.php");
}
?>