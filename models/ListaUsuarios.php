<?php
require_once '../includes/header.php';

require_once '../includes/footer.php';
?>
<main class="app-content">
    <div class="app-title">
        <h1><i class="bi bi bi bi-person-fill-add"></i> Lista de usuarios
        <button class="btn btn-success" type="button" onclick="openModal()">Nuevo</button>
        </h1>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item"><a href="#">Lista de usuarios</a></li>
    </ul>
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableusuarios">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>F. Nacimiento</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Celular</th>
                        <th>Área</th>
                        <th>Cargo</th>                        
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</main>