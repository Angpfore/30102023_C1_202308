<?php
include_once('../config/config.php');
include('usuario.php');

$p = new Usuario();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));

if ( isset($_POST) && !empty($_POST) ){
   $update = $p->update($_POST);

   if ($update){
    $mensaje = '<div class="alert alert-success" role="alert">Usuario Modificado exitosaente.</div>';
   }else{
    $mensaje = '<div class="alert alert-danger" role="alert">ERROR AL MODIFICAR.</div>';
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

               
				
				<input name="id" class="form-control" required type="hidden" id="id" value="<?= $dp->ID ?>">
				
				
				<div class='mb-3'>
				<label for="nombre" class="form-label">Nombre:</label>
				<input name="nombre" class="form-control" required type="text" id="nombre" placeholder="Escribe tu nombre..." value="<?= $dp->NOMBRE ?>">
				</div>

				<div class='mb-3'>
				<label for="apellido" class="form-label">Apellidos:</label>
				<input name="apellido" class="form-control" required type="text" id="apellido" placeholder="Escribe tus apellidos..." value="<?= $dp->APELLIDO ?>">
				</div>

				<div class='mb-3'>
				<label for="ciudad" class="form-label">Ciudad</label>
				<select class="form-select" aria-label="Default select example" name="ciudad" required name="ciudad" id="ciudad" >
					
                    <option value="<?= $dp->CIUDAD ?>"> <?= $dp->CIUDAD ?></option>
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