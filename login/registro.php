<?php


// mysqli_set_charset($conexion, "utf8");

require_once 'conexion.php';
require_once "../templates/script.php";
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$database = new Database();
$db = $database->connect();

if(buscaRepetido($usuario,$password,$db)==1){
	echo "<script>
		alert('Este usuario ya existe');
			</script>";
}else{
	$result = $db->prepare("INSERT INTO `usuarios`(`Nombre`, `Password`, `Correo`) VALUES ('$nombre', '$password', '$usuario')");
	$result->execute();
	
	if ($result == TRUE) {
		echo "<script>
		alert('Agregado con exito');
			</script>";
		// header("Location: ../registro.php");
	} else {
		
	}
}
function buscaRepetido($usuario,$password,$db){
	$result1 = $db->prepare("SELECT * FROM `usuarios` WHERE `Correo` = ? AND `Password`= ?");
    $result1->bindParam(1, $usuario, PDO::PARAM_INT);
	$result1->bindParam(2, $password, PDO::PARAM_INT);
    $result1->execute();

	
		if($result1->rowCount() > 0){
			return 1;
		}else{
			return 0;
			echo "<script>
				alert('Fallo al agregar');
				</script>";
				// header("Location: ../registro.php");
		}
	
	
}
