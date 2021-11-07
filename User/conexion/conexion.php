 <?php
class Database{

    public function connect(){
        try{
			$dbname="basededatos";
			$user="root";
			$password="";
			$dsn = "mysql:host=localhost;dbname=$dbname;SET CHARACTER SET UTF8";
            return new PDO($dsn, $user, $password,
                [
                    /**
                     * Activar el manejo de errores y retornar una exception.
                     */
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    /**
                     * Cambiar el modo de gestion de datos en el software
                     * En este caso queremos que retorne objetos.
                     */
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

}
?>