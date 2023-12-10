<?php
include_once('../config/config.php');
include('usuario.php');

$p = new Usuario();
$data = $p->getAll();

if ( isset($_GET['id']) &&  !empty($_GET['id'])) 
{
    $remove= $p->delete($_GET['id']);
    if ($remove){
        header('Location: '.ROOT.'/usuarios/index.php');
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Lista de usuarios</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Usuarios</h1>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= ROOT ?>index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>usuarios/add.php">registra</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">EDITAR Registro</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>

      
        <div class="row">
            <?php
            while($pt = mysqli_fetch_object($data))
            {
                
                echo "<div class='ROW'>";
                    echo "<div class='border border-info p-2'>";
                    echo "<h5> $pt->NOMBRE $pt->APELLIDO $pt->CIUDAD </h5>";
                    echo "<a class='btn btn-success' href='".ROOT."/usuarios/edit.php?id=$pt->ID'>Modificar</a>-<a class='btn btn-danger' href='".ROOT."/usuarios/index.php?id=$pt->ID'>Eliminar</a>";
                    echo "</div>";
                echo "</div>";
            }
            ?>
        </div>

    </div>
	</body>
</html>
