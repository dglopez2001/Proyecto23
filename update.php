<?php
include("headerfuncionesadmin.php");
?>
<title>Actualizar</title>
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
      $nombre = $_POST["name"];
      $precio = $_POST["precio"];
      $descuento = $_POST["descuento"];
      $categoria = $_POST["categoria"];
      $imagen = $_POST["imagen"];
      $stock = $_POST["stock"];

      // Validar los datos antes de actualizarr en la base de datos
      if (isset($_POST['enviar'])) {
        // Construir la consulta SQL de actualización
      $update = "UPDATE mis_productos SET ";

      if (!empty($nombre)) {
        $update .= "name='$nombre', ";
      }

      if (!empty($precio)) {
        $update .= "price='$precio', ";
      }

      if (!empty($descuento)) {
        $update .= "discount='$descuento', ";
      }

      if (!empty($categoria)) {
        $update .= "categoria='$categoria', ";
      }

      if (!empty($imagen)) {
        $update .= "imagen='$imagen', ";
      }

      if (!empty($stock)) {
        $update .= "stock='$stock', ";
      }

      $update .= "modified=NOW() WHERE id='$id'";

        if (mysqli_query($conexion, $update)) {
          echo '<p class="correcto">Datos actualizados correctamente</p>';
          echo "<script>";
          echo "setTimeout(function() {";
          echo "  window.location.replace('./update.php');";
          echo "}, 1000);";
          echo "</script>";
        } else {
          echo "Error al agregar los datos: " . mysqli_error($conexion);
        }
      } else {
        echo "Por favor, complete todos los campos del formulario";
      }
    } else {
      ?>
      <form method="post" class="admin" >
        <h2 class="admin">Actualizar Producto </h2><br>
        <label for="id">Id:</label>
        <input type="number" name="id" required class="admin">
        <br>
        <label for="name">Nombre:</label>
        <input type="text" name="name"  class="admin">
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio"  class="admin">
        <br>
        <label for="name">Descuento:</label>
        <input type="text" name="descuento" class="admin">
        <br>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria"  class="admin">
        <br>
        <label for="imagen">Ruta imagen:</label>
        <input type="text" name="imagen"  class="admin">
        <br>
        <label for="stock">Stock:</label>
        <input type="text" name="stock"  class="admin">
        <br>
        <input type="submit" value="Agregar datos" name="enviar" class="admin">
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
