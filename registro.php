<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "templates/script.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel panel-heading">Registro de usuario</div>
				<div class="panel panel-body">
					<form action="login/registro.php" method="POST" id="frmRegistro">
						<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name="nombre">
					<label>Usuario</label>
					<input type="text" class="form-control input-sm" id="usuario" name="usuario">
					<label>Password</label>
					<input type="text" class="form-control input-sm" id="password" name="password">
					<p></p>
                    <input type="submit" class="btn btn-primary" value="Registrar" name="Registrar" id="registrarNuevo">
					</form>
					<div style="text-align: right;">
						<a href="index.php" class="btn btn-default">Login</a>
					</div>
				</div>
			</div>
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