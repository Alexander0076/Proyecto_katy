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
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4 style="color: #f33f3f; font-size: 90px; text-transform: uppercase; font-weight: 900;margin-bottom: 15px">Contactanos</h4>
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
              <i class="fas fa-phone-alt"></i>
              </div>
              <div class="down-content">
                <h4>Numero de Contacto</h4>
                <p>+503 7070-7070</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <div class="down-content">
                <h4>Correo electronico</h4>
                <p>Restar503@gmail.com</p>
                
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
