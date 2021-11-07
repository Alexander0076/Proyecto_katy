<!DOCTYPE html>
<html>
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

<body style="background-color: gray">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Login facultad autodidacta</div>
                    <div class="panel panel-body">
                        <p></p>
                        <form action="login/login.php" method="POST">
                        <label>Usuario</label>
                        <input type="text" id="usuario" class="form-control input-sm" name="usuario">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control input-sm" name="password">
                        <p></p>
                        <input type="submit" class="btn btn-primary" id="entrarSistema" value="Entar" name="Entrar">
                        </form>
                        
                        <a href="registro.php" class="btn btn-danger">Registro</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>

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