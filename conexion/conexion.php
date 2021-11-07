<?php
//Datos de la conexión
$servidor = "localhost"; 
$usuario = "root";
$password = "";
$basededatos = "basededatos";

//Creación de la conexión a la base de datos
//Creamos una variable llamada $conexion que utilizaremos en cada página donde necesitemos hacer una consulta a la base de datos y pasamos los parámetros que creamos arriba, si alguno esta erróneo o no logramos hacer conexión, se ejecutará el bloque de código “or die”, el cual ejecutará el mensaje de error que escribamos.
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error, no estas conectado al servidor");

//Seleccionar la base de datos a utilizar
//Seleccionamos la base de datos con la cual queremos trabajar, como ya configuramos el nombre en la variable de arriba, solo colocamos la variable $basededatos, al igual que en la conexión de arriba utilizamos el or die en caso de tener un error
$db = mysqli_select_db($conexion, $basededatos) or die("Error, no estas conectado a la base de datos");
?>