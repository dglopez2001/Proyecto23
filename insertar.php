<?php
include("headerfuncionesadmin.php");
?>
<title>Insertar</title>
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
      $nombre = $_POST["name"];
      $precio = $_POST["precio"];
      $descuento = $_POST["descuento"];
      $categoria = $_POST["categoria"];
      $imagen = $_POST["imagen"];
      $stock = $_POST["stock"];

      // Validar los datos antes de insertarlos en la base de datos
      if (!empty($nombre) && !empty($precio) && !empty($categoria) && !empty($imagen)) {
        $insertar = "INSERT INTO mis_productos (name, price, discount, categoria, created, modified, imagen, stock) VALUES ('$nombre', '$precio', '$descuento','$categoria', NOW(), NOW(), '$imagen', '$stock')";
        if (mysqli_query($conexion, $insertar)) {
          echo '<p class="correcto">Datos agregados correctamente</p>';
          echo "<script>";
          echo "setTimeout(function() {";
          echo "  window.location.replace('./insertar.php');";
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
      <form method="post" class="admin">
        <h2 class="admin">Agregar Producto</h2>
        <label for="name">Nombre:</label>
        <input type="text" name="name" required class="admin">
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" required class="admin">
        <br>
        <label for="name">Descuento:</label>
        <input type="text" name="descuento" class="admin">
        <br>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" required class="admin">
        <br>
        <label for="imagen">Ruta imagen:</label>
        <input type="text" name="imagen" required class="admin">
        <br>
        <label for="stock">Stock:</label>
        <input type="text" name="stock" required class="admin">
        <br>
        <input type="submit" value="Agregar datos" class="admin">
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
