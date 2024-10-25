<?php
session_start(); // Inicia la sesión al principio

require_once '../includes/header.php'; // Asegúrate de que la ruta sea correcta
?>

<!-- Parte de centro de dashboard -->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-houses-fill"></i> Sistema de Registro</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="">Inicio1</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Create a beautiful dashboard</div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../includes/footer.php'; // Asegúrate de que la ruta sea correcta
?>
