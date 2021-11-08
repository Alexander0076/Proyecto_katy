<?php


// mysqli_set_charset($conexion, "utf8");

require_once '../conexion/conexion.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$database = new Database();
$db = $database->connect();

if(buscaRepetido1($nombre,$correo ,$db)==1){
	echo "<script>
		alert('Este usuario ya existe');
			</script>";
}else{
	$result = $db->prepare("INSERT INTO `solicitudempleo`(`Nombre`, `Contacto`, `Correo`, `Direccion`, `FechaNac`)  VALUES ('$nombre', '$telefono', '$correo', '$direccion', '$fecha')");
	$result->execute();
	
	if ($result == TRUE) {
		echo "<script>
		alert('Agregado con exito');
			</script>";
		header("Location: ../index.php");
	} else {
		
	}
}
function buscaRepetido1($nombre, $correo ,$db){
	$result1 = $db->prepare("SELECT * FROM `solicitudempleo` WHERE `Nombre` = ? AND `Correo`= ?");
    $result1->bindParam(1, $nombre, PDO::PARAM_INT);
	$result1->bindParam(2, $correo, PDO::PARAM_INT);
    $result1->execute();

	
		if($result1->rowCount() > 0){
			return 1;
		}else{
			return 0;
			echo "<script>
				alert('Fallo al agregar');
				</script>";
				header("Location: ../aplica.php");
		}
	
	
}
