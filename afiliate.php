<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Afiliado</title>
  <link rel="stylesheet" media="all" href="css/styleAplicar.css" />
</head>
<body>
<div class="container">
	<div class="row">
			<h4 style="text-align:center">¡Registra tu restaurante en nuestra plataforma!</h4>
	</div>
	
    <div class="row input-container">
    <form action="login/afiliate.php" method="POST">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" value="" name="nombre"  required />
					<label>Nombre de empresa o emprendimiento</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" value="" name="usuario"  required />
					<label>Crea un usuario</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" value="" name="password" required />
					<label>Crea una contraseña</label> 
				</div>
			</div>
            <div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" value="" name="direccion"  required />
					<label>Dirección</label> 
				</div>
			</div>
            <div class="col-xs-12"> 
				<div class="styled-input wide">
					<input type="text" value="" name="Contacto" required/>
                    <label>Numero de teléfono</label> 
				</div>
			</div>
			<div class="col-xs-12">
                <input type="submit" name="afiliate" value="Afiliarse" id="aplicar" >
			</div>
            </form>
	</div>
    
</div>
</body>

</html>