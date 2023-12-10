<?php

include_once('../config/config.php');
include('usuario.php');
 
if ( isset($_POST) && !empty($_POST) ){
    $p = new Usuario();

$save = $p->save($_POST);
if($save){
$mensaje= '<div class="alert alert-success"> Usuario registrado </div>';
}else{
    $mensaje= '<div class="alert alert-success">ERROR Usuario NO registrado </div>';
}
}
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
        <?php
			if (isset ($mensaje))
			{
				echo $mensaje;
			}
		?>
		<h1 class="text-center">Registro</h1>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= ROOT ?>index.php">Home</a>
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
	 	 <div>
			<form method="post" >
				
				<div class='mb-3'>
				<label for="nombre" class="form-label">Nombre:</label>
				<input name="nombre" class="form-control" required type="text" id="nombre" placeholder="Escribe tu nombre...">
				</div>

				<div class='mb-3'>
				<label for="apellido" class="form-label">Apellidos:</label>
				<input name="apellido" class="form-control" required type="text" id="apellido" placeholder="Escribe tus apellidos...">
				</div>

				<div class='mb-3'>
				<label for="ciudad" class="form-label">Ciudad</label>
				<select class="form-select" aria-label="Default select example" name="ciudad" required name="ciudad" id="ciudad">
					<option selected>--Selecciona--</option>
					<option value="Bogota">Bogota</option>
					<option value="Medellin">Medellin</option>
					<option value="Cartagen">Cartagena</option>
				</select>

				</div>
				<button class="btn btn-success" >Registrar</button>
			</form>
		</div>
    </div>
	</body>
</html>