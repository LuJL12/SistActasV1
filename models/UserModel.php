<?php
require_once 'config/database.php';

class UserModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect(); // Establecer la conexión
    }

    public function validateCredentials($username, $password) {
        // Consulta para verificar credenciales y obtener el nombre del usuario y su rol
        $query = "SELECT u.idUsuario, u.nombreUser AS nombre, r.descripcionRol AS rol 
                  FROM usuario u
                  JOIN rol r ON u.idRol = r.idRol
                  WHERE u.nombreUser = :username AND u.password = :password";
        
        $stmt = $this->conn->prepare($query); // Usar la conexión correcta
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC); // Devuelve el idUsuario, nombre y rol del usuario
        }
    
        return false; // Retorna false si no hay coincidencias
    }
}
?>
