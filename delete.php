<?php
include("headerfuncionesadmin.php");
?>
<title>Eliminar</title>
<?php
$nombre = $_SESSION["nombre"];
$correo = $_SESSION["correo"];
$consulta = "SELECT rol FROM clientes WHERE nombre='$nombre' AND correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);
if (mysqli_num_rows($resultado) >= 1) {
  $row = mysqli_fetch_assoc($resultado);
  $rol = $row["rol"];
  if ($rol == 'administrador') {
    // Si el usuario es un administrador, mostrar el formulario para agregar datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Procesar los datos del formulario
      $id = $_POST["id"];


      // Validar los datos antes de actualizarr en la base de datos
      if (!empty($id)) {
        $delete = "DELETE FROM mis_productos WHERE id='$id'";
        if (mysqli_query($conexion, $delete)) {
          echo '<p class="correcto">Datos eliminados correctamente<br></p>';
          echo "<script>";
          echo "setTimeout(function() {";
          echo "  window.location.replace('./delete.php');";
          echo "}, 1000);";
          echo "</script>";
        } else {
          echo "Error al eliminar los datos: " . mysqli_error($conexion);
        }
      } else {
        echo "Por favor, complete todos los campos del formulario";
      }
    } else {
      ?>
      <form method="post" class="admin">
        <h2 class="admin">Borrar Producto </h2><br>
        <label for="id">Id:</label>
        <input type="number" name="id" required class="admin">
        <br> 
        <input type="submit" value="Borrar datos" class="admin">
      </form>
      <?php
    }
  } else {
    // Si el usuario no es un administrador, redirigir a la página de inicio
    header("Location: ./index.php");
  }
  include("footer.php");
}
?>
