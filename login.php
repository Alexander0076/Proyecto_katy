<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/styleLogin.css">
<?php 
require_once 'conexion/conexion.php';
require_once 'login/conexion.php';

?>
<head>
    <title>Login</title>

    <?php
    require_once 'templates/head.php';
    ?>
    <?php
    require_once 'templates/script.php';
    ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                    <h2 class="head-form">Login</h2>
                        <form action="login/login.php" method="POST">
                        <label ><i class="fa fa-user-circle"></i>  Usuario</label>
                        <input type="text" id="usuario" class="form-control input-sm" name="usuario">
                        <label ><i class="fa fa-key"></i> Password</label>
                        <input type="password" id="password" class="form-control input-sm" name="password">
                        <p></p>
                        <input type="submit" class="btn btn-primary" id="entrarSistema" value="Entar" name="Entrar">
                        <a href="registro.php" class="btn btn-danger">Registro</a>
                        </form>
                        
                        
                    
                
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>
<script src="js/login.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#entrarSistema').click(function() {
            if ($('#usuario').val() == "") {
                alertify.alert("Debes agregar el usuario");
                return false;
            } else if ($('#password').val() == "") {
                alertify.alert("Debes agregar el password");
                return false;
            }
        });
    });
</script>