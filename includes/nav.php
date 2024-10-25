<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            <div class="user-info">
                <?php if (isset($_SESSION['nombre'])): ?>
                    <span><?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                    <span>(<?php echo htmlspecialchars($_SESSION['rol']); ?>)</span>
                <?php else: ?>
                    <span>No has iniciado sesión</span>
                <?php endif; ?>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="../views/dashboard.php"><i class="app-menu__icon bi bi-houses"></i><span class="app-menu__label">Inicio</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-person-fill"></i><span class="app-menu__label">Registro de usuarios</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="../models/ListaUsuarios.php"><i class="icon bi bi-person-fill-add"></i> Nuevo usuario</a></li>
            </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Documentos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon bi bi-circle-fill"></i> Mis docuemntos</a></li>
            </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Actas</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon bi bi-circle-fill"></i> Actas de notas</a></li>
                <li><a class="treeview-item" href="#"><i class="icon bi bi-circle-fill"></i> Actas de aplazadas</a></li>
            </ul>
            </li>
            <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon bi bi-code-square"></i><span class="app-menu__label">Reportes</span></a></li>
        </ul>
    </aside>