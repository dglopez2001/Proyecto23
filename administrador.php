<?php
include("headeradministrador.php");
?>
<title>Gestion</title>
<?php
$nombre = $_SESSION["nombre"];
$correo = $_SESSION["correo"];
$consulta = "SELECT rol FROM clientes WHERE nombre='$nombre' AND correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);
if (mysqli_num_rows($resultado) >= 1) {
  $row = mysqli_fetch_assoc($resultado);
  $rol = $row["rol"];
  if ($rol == 'administrador') {
     echo'<div class="links-container">';
     echo'<h2 class="encabezado">Opciones</h2>';
     echo'<a href="insertar.php" class="links">Insertar Producto</a><br>';
     echo'<a href="update.php" class="links">Actualizar Producto</a><br>';
     echo'<a href="delete.php" class="links">Borrar Producto</a><br>';
     echo'<a href="vermisproductos.php" class="links">Ver Productos</a><br>';
     echo'</div>';
    }
  } else {
    // Si el usuario no es un administrador, redirigir a la página de inicio
    echo "<script>window.location.replace('./index.php');</script>";
  }
  include("footer.php");
?>
