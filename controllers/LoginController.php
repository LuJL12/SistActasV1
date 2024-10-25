<?php
require_once 'models/UserModel.php';

class LoginController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Manejar la petición
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->login();
        } else {
            $this->showLogin();
        }
    }

    // Método para el login
    private function login() {
        $username = $_POST['nombreUser'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validar la entrada
        if ($this->validateUserInput($username, $password)) {
            // Verificar credenciales
            $userData = $this->userModel->validateCredentials($username, $password);
            if ($userData) {
                // Guardar el nombre de usuario y rol en la sesión
                $_SESSION['idUsuario'] = $userData['idUsuario']; // Guardar idUsuario
                $_SESSION['nombreUser'] = $userData['nombre']; // Nombre del usuario
                $_SESSION['rol'] = $userData['rol']; // Rol del usuario

                header("Location: views/dashboard.php"); // Redirigir al dashboard
                exit();
            } else {
                header("Location: views/login.php?b=1"); // Credenciales incorrectas
                exit();
            }
        } else {
            header("Location: views/login.php?e=1"); // Datos no válidos
            exit();
        }
    }

    // Mostrar página de login
    private function showLogin() {
        require 'views/login.php';
    }

    // Validar la entrada del usuario
    private function validateUserInput($username, $password) {
        return preg_match('/^[a-zA-Z]+$/', $username) && preg_match('/^[0-9]+$/', $password);
    }
}
?>
