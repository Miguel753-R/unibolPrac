<?php
      include("includes/db.php");
?>

<div class="d-flex">
      <div id="sidebar-container" class="bg-primary">
        <div class="logo">
          <h4 class="text-light font-weight-bold">Administrador</h4>
        </div>
        <div class="menu">
          <a href="#" class="d-block text-light p-3"><i class="icon ion-md-apps mr-2 lead"></i>Tablero</a>
          <a href="#" class="d-block text-light p-3"><i class="icon ion-md-people mr-2 lead"></i>Usuarios</a>
          <a href="#" class="d-block text-light p-3"><i class="icon ion-md-exit mr-2 lead"></i>Cerrar sesion</a>

        </div>
      </div>

      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <form class="d-flex position-relative">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
          </form>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="icon ion-md-person"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../includes/cerrar.php">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</nav>
      </div>
    </div>