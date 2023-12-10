<?php
include('config/config.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Registrar persona</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registro</h1>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>usuarios/add.php">registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>usuarios/index.php">EDITAR Registro</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
    </div>
	</body>
</html>
