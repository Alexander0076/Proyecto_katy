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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4 style="color: #f33f3f; font-size: 90px; text-transform: uppercase; font-weight: 900;margin-bottom: 15px">Acerca de nosotros</h4>
              <h3>Nuestro objetivo es crear una mejor experiencia cliente en los lugares que este desee visitar y darle una aplicación de confianza donde puedan opinar de forma libre sobre el sabor, limpieza, atención y precios sin importar sean negativos o positivos.</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Re-Star</h4>
              <p>Esta comprometida a trabajar e innovar de la mejor manera y con la mayor rapidez para dar lo mejor a nuestros fieles clientes, la realización de esta página web es con el objetivo de poder tener una manera de inscripción más rápida y que los encargados de restaurantes no deban acercase hasta nuestras oficinas, sino que sea un tramite rápido y sin la necesidad de salir de su lugar de trabajo o casa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br><br>


    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Nosotros...</h4>
                <p>En Re-Star, buscamos la forma de siempre innovar y poder más al alcance de nuestros clientes, dándoles un servicio de calidad y rapidez. Incorporarnos a las diferentes plataformas es una forma de llegar a más clientes ya que a pesar de ser un emprendimiento pequeño muchos de los restaurantes inscritos prefieren pagar su suscripción de manera virtual y así no visitar nuestras oficinas.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Lo que queresmos es...</h4>
                <p>Evaluar los gustos, opiniones y criterios de la persona salvadoreña para guiar nuestro emprendimiento y satisfacer sus necesidades con éxito, además, aclarar nuestra visión sobre cómo comunicaremos y expandiremos el emprendimiento a nivel socioeconómico.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Debido a...</h4>
                <p>La situación actual a cambiado, es imposible no ver algunos años atrás y darnos cuenta de los muchos avances que hemos tenido en poco tiempo. Por eso queremos evaluar las mejores opciones de restaurantes para los diferentes tipos de clientes basándonos en sus gustos, presupuestos o lugares ya visitados y crear una experiencia cliente/restaurante único, donde los consumidores se sientan satisfechos.</p>
                
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
