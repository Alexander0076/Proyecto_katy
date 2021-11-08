<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="css/styleLogin.css">
	<?php require_once "templates/script.php"; ?>
</head>
<body >

<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
				<h2>Registro de usuario</h2>
					<form action="login/registro.php" method="POST" id="frmRegistro">
					<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name="nombre">
					<label>Usuario</label>
					<input type="text" class="form-control input-sm" id="usuario" name="usuario">
					<label>Password</label>
					<input type="text" class="form-control input-sm" id="password" name="password">
					<p></p>
                    <input type="submit" class="btn btn-primary" value="Registrar" name="Registrar" id="registrarNuevo">
					<a href="index.php" class="btn btn-default">Login</a>
					</form>
					
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#nombre').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

		});
	});
</script>