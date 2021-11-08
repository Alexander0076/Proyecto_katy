<?php

require_once 'conexion/conexion.php';
if (isset($_POST['agregar'])) {
    if (isset($_SESSION['add_carro'])) {
        $item_array_id_cart = array_column($_SESSION['add_carro'], 'item_id');
        if (!in_array($_GET['id'], $item_array_id_cart)) {

            $count = count($_SESSION['add_carro']);
            $item_array = array(
                'item_id'        => $_GET['id'],
                'item_nombre'    => $_POST['hidden_nombre'],
                'item_precio'    => $_POST['hidden_precio'],
                'item_afiliado'  => $_POST['hidden_afiliado'],
            );

            $_SESSION['add_carro'][$count] = $item_array;
        } else {
            echo '<script>alert("El Producto ya existe en el carrito!");</script>';
        }
    } else {
        $item_array = array(
            'item_id'        => $_GET['id'],
            'item_nombre'    => $_POST['hidden_nombre'],
            'item_precio'    => $_POST['hidden_precio'],
            'item_afiliado'  => $_POST['afiliado'],
        );

        $_SESSION['add_carro'][0] = $item_array;
    }
}
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        foreach ($_SESSION['add_carro'] as $key => $value) {
            if ($value['item_id'] == $_GET['id']) {
                unset($_SESSION['add_carro'][$key]);
                echo '<script>alert("El producto fue eliminado del carrito!");</script>';
                echo '<script>window.location="carrito.php";</script>';
            }
        }
    }
}
?>
<nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="index.php"><h2>RE-<em>Star</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link"  href="products.php">Producto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i> Carrito</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Acerca de nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Index.php">Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

