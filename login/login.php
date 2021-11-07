<?php


session_start();
require_once 'conexion.php';


$usuario = $_POST['usuario'];
$password = $_POST['password'];

$database = new Database();
$db = $database->connect();

if ($usuario == "admin") {
	$result1 = $db->prepare("SELECT * FROM `usuarios` WHERE `Correo` = ? AND `Password`= ?");
    $result1->bindParam(1, $usuario, PDO::PARAM_INT);
	$result1->bindParam(2, $password, PDO::PARAM_INT);
    $result1->execute();

if ($result1->rowCount() > 0) {
	$_SESSION['user'] = $usuario;
	header("Location: ../Admin/index.php");
} else {
	echo 0;
}
}else{
	$result1 = $db->prepare("SELECT * FROM `usuarios` WHERE `Correo` = ? AND `Password`= ?");
    $result1->bindParam(1, $usuario, PDO::PARAM_INT);
	$result1->bindParam(2, $password, PDO::PARAM_INT);
    $result1->execute();

if ($result1->rowCount() > 0) {
	$_SESSION['user'] = $usuario;
	header("Location: ../User/index.php");
} else {
	echo 0;
}
}




?>
