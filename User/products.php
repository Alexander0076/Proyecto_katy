<?php
session_start();
require_once 'conexion/conexion.php';
if (isset($_SESSION['user'])) {

  $database = new Database();
  $db = $database->connect();
  $result1 = $db->prepare("SELECT * FROM productos inner join afiliados on productos.Id_afiliado = afiliados.Id_afiliados");
  $result1->execute();
  $results1= $result1->fetchAll();

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
      require_once 'templates/header.php';
      ?>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Productos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                <li class="active" data-filter="*">Todos los productos</li>
                <!-- <li data-filter=".des">Featured</li>
                <li data-filter=".dev">Flash Deals</li>
                <li data-filter=".gra">Last Minute</li> -->
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
              <div class="row grid">
                <?php
                 foreach ($results1 as $newdato) {
                   ?>
                <div class="col-lg-4 col-md-4 all des">
                <form method="post" action="carrito.php?action=add&id=<?php echo $newdato->Id_producto; ?>">
                  <div class="product-item">
                    <a href="#"><img src="../images/<?php echo $newdato->Img?>" alt=""></a>
                    <div class="down-content">
                    <br><br>
                      <a href="#">
                        <h4><?php echo $newdato->Nombre?> </h4>
                      </a>
                      <span>Afiliado / <?php echo $newdato->Nombre_Empresa?></span>
                      <h6>$<?php echo $newdato->Precio?></h6>
                      <input type="hidden" name="hidden_nombre" value="<?php echo  $newdato->Nombre; ?>" />
                      <input type="hidden" name="hidden_precio" value="<?php echo $newdato->Precio; ?>" />
                      <input class="btn" type="submit" value="ADD" name="'agregar" id="agregar" >
                    </div>
                  </div>
                  </form>
                </div>
                <?php
                 }
                 ?>
                
                
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