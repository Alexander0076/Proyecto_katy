<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solicitud</title>
  <link rel="stylesheet" media="all" href="css/styleAplicar.css" />
</head>
<body>
<div class="container">
	<div class="row">
			<h4 style="text-align:center">Aplica y se parte de Re-Star</h4>
	</div>
	
    <div class="row input-container">
    <form action="model/aplica.php" method="POST">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="nombre" id="nombre" required />
					<label>Nombre completo</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="correo" id="correo" required />
					<label>Correo</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="telefono" id="telefono" required />
					<label>Numero de teléfono</label> 
				</div>
			</div>
            <div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="direccion" id="direccion" required />
					<label>Dirección</label> 
				</div>
			</div>
            <div class="col-xs-12"> 
				<div class="styled-input wide">
					<input type="text" name="fecha" id="fecha" required/>
                    <label>Fecha de nacimiento YY/mm/dd</label> 
				</div>
			</div>
			<div class="col-xs-12">
                <input type="submit" name="aplicar" value="Aplicar" id="aplicar" >
			</div>
            </form>
	</div>
    
</div>
</body>

</html>