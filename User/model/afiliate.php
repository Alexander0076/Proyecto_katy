<?php


// mysqli_set_charset($conexion, "utf8");

require_once '../conexion/conexion.php';
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$direccion = $_POST['direccion'];
$Contacto = $_POST['Contacto'];
$database = new Database();
$db = $database->connect();

if(buscaRepetido1($usuario,$password ,$db)==1){
	echo "<script>
		alert('Este usuario ya existe');
			</script>";
}else{
	$result = $db->prepare("INSERT INTO `afiliados`( `Nombre_Empresa`, `Usuario`, `Password`, `Direccion`, `Contacto`) VALUES ('$nombre', '$usuario ', '$password', '$direccion', '$Contacto')");
	$result->execute();
	
	if ($result == TRUE) {
		echo "<script>
		alert('Agregado con exito');
			</script>";
		header("Location: ../index.php");
	} else {
		
	}
}
function buscaRepetido1($usuario,$password,$db){
	$result1 = $db->prepare("SELECT * FROM `afiliados` WHERE `Usuario` = ? AND `Password`= ?");
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
				header("Location: ../afiliate.php");
		}
	
	
}
