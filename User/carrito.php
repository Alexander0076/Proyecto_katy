<?php session_start();
require_once 'conexion/conexion.php';
if (isset($_SESSION['user'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <?php
        require_once 'templates/head.php'
        ?>
    </head>

    <body>
        <header>
            <?php
            require_once 'templates/header.php'
            ?>
        </header>
        <section>
        <div style="clear:both"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Table #05</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table table-responsive-xl">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($_SESSION["add_carro"])) {
                                        $total = 0;
                                        foreach ($_SESSION["add_carro"] as $keys => $values) {
                                    ?>
                                            <tr class="alert">

                                                <td><?php echo $values["item_id"]; ?></td>
                                                <td><?php echo $values["item_nombre"]; ?></td>
                                                <td>$<?php echo $values["item_precio"]; ?></td>
                                                <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Quitar</span></a></td>
                                            </tr>
                                        <?php
                                            $total = $total + $values["item_precio"];
                                            $_SESSION['total'] = $total;
                                        }
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td class="d-flex align-items-center" colspan="2" style="text-align: right;">Total</td>
                                            <td style="color:green; font-weight:bold;">$ <?php echo $total; ?></td>
                                            <td>
                                                <h4 style="text-align: center;"><a href="compra.php">Comprar</a></h4>
                                            </td>
                                        </tr>

                                    <?php
                                    } else {
                                    ?>
                                        <tr>
                                            <td colspan="6" style="color: red; text-align: center;"><strong>No hay ningun producto agregado!</strong></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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